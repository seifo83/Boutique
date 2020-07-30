<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Uploader
{
    private $photoDirectory;

    // $photoDirectory a été déclaré dans services.yaml (en bind)
    public function __construct($photoDirectory)
    {
        $this->photoDirectory = $photoDirectory;
    }

    // Enregistrer 1 image
    public function savePhoto(UploadedFile $file) : string
    {
        // Construire un nom de fichier unique
        $fileName = date('YmdHis') . uniqid() . '.' . $file->guessClientExtension();

        // Enregistrer le fichier
        $file->move($this->photoDirectory, $fileName);

        // Retourner le nom du fichier
        return $fileName;
    }

    // Remplacer une image
    public function replacePhoto(UploadedFile $file, string $oldFile) : string
    {
        // Enregistrer la nouvelle image
        $fileName = $this->savePhoto($file);

        // Supprimer l'ancienne
        $this->deletePhoto($oldFile);

        // Retourner le nom du nouveau fichier
        return $fileName;
    }

    // Supprimer 1 photo
    public function deletePhoto(string $fileName) : void
    {
        $oldPath = $this->photoDirectory . '/' . $fileName;
        if (file_exists($oldPath) && is_file($oldPath)) {
            unlink($oldPath);
        }
    }
}