<?php
switch ($page) {
    case 'index':
        $title = "Archik intérieur - Projet d'architecture et décoration d'intérieur en Belgique et Hauts-de-France";
        $pageDescription = "Découvrez Archik intérieur, votre expert en architecture et décoration d'intérieur en Belgique et 
        Hauts-de-France. Réalisez votre projet à Tournai, Lille, Tourcoing et environs.";
        $h1 = "VOTRE PROJET D'ARCHITECTURE ET DÉCORATION D'INTÉRIEUREN BELGIQUE ET HAUTS-DE-FRANCE (TOURNAI, LILLE, TOURCOING)";
        $quotation = "";
        $author = "";
        $jumbotron = "archik-interieur-accueil.webp";
        break;
    // Ajoutez d'autres cas au besoin
    case 'services':
        $title = "Services d'aménagement extérieur | La première Impression Compte - Archik intérieur";
        $pageDescription = "Chez Archik intérieur, nous comprenons l'importance de la première impression. Nos services 
        d'aménagement garantissent que vos clients sont séduits avant même d'entrer dans votre établissement. Découvrez comment 
        nous transformons les premières impressions en ventes.";
        $h1 = "PARCE QUE VOS CLIENTS ACHETENT AVANT MEME DE RENTRER AVANT MEME DE RENTRER DANS VOTRE ETABLISSEMENT !";
        $quotation = "« L'architecture, c'est une tournure d'esprit et non un métier. »";
        $author = "Le corbusier";
        $jumbotron = "archik-interieur-services.webp";
        break;
    case 'projets':
        $title = "Projets d'Identité de Marque | Cohérence & Authenticité - Archik intérieur";
        $pageDescription = "Archik intérieur se spécialise dans la création de projets qui reflètent fidèlement l'image de marque 
        de votre entreprise. Notre mission : donner une identité authentique et cohérente à chaque espace. Découvrez nos 
        réalisations et comment nous valorisons votre image de marque.";
        $h1 = "DONNER UNE IDENTITE EN ACCORD AVEC L’IMAGE DE MARQUE DE VOTRE ENTREPRISE EST MON MOT D’ORDRE";
        $quotation = "« Chaque fois que vous voyez une entreprise qui réussit, dites-vous que c’est parce qu’un jour quelqu’un a pris une décision courageuse. »";
        $author = "Peter Drucker";
        $jumbotron = "archik-interieur-projets.webp";
        break;
    case 'contact':
        $title = "Contactez Archik intérieur | Parlons de Votre Projet d'Intérieur";
        $pageDescription = "Prêt à transformer votre espace? Contactez Archik intérieur dès aujourd'hui pour discuter de vos 
        idées et besoins en matière d'architecture et de décoration d'intérieur. Nous sommes là pour vous aider à concrétiser 
        votre vision.";
        $h1 = "CONTACTEZ ARCHIK INTERIEUR";
        $quotation = "";
        $author = "";
        $jumbotron = "archik-interieur-contact.webp";
        break;
    default:
        $title = "Archik intérieur";
        $pageDescription = "Projet d'architecture et décoration d'intérieur.";
        $h1 = "ARCHIK INTERIEUR";
        $quotation = "";
        $author = "";
        $jumbotron = "archik-interieur-accueil.webp";
        break;
}