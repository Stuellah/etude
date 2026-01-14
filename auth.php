<?php
// auth.php
session_start();

// Vérifier si l'utilisateur est connecté
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Rediriger vers la page de connexion si non connecté
function requireAuth()
{
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

// Vérifier les permissions (si misy rôle)
function hasPermission($permission)
{
    // Exemple de logique
    return true;
}
