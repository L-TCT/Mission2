var abregeProjet                /*--Char (10)   --Nom abrégé du projet*/
var activite                    /*--Char (25)   --Activité du client*/
var adresse                     /*--Char ???    --Adresse complète du client*/
var agenceInterim               /*--Char (25)   --Nom de l'agence d'intérim*/
var CA                          /*--Decimal     --Chiffre d'affaires du client*/
var chargeEstimee               /*--Entier      --Charge estimée du projet*/
var effortEstimeUS              /*--Entier      --Effort initial estimé d'une User Story*/
var effortProduitUS             /*--Entier      --Effort réellement produit d'une User Story*/
var effortValideUS              /*--Entier      --Effort 'normal' d'une User Story après réestimation*/
var codeProjet                  /*--Entier      --Code du projet*/
var commSprint                  /*--Texte       --Commentaires sur le Sprint réalisé*/
var commentComm                 /*--Texte       --Commentaires du commercial sur le projet*/
var dateDebTache                /*--Date        --Date début intervention d'un développeur sur une tâche d'un Sprint*/
var dateDebutContrat            /*--Date        --Date début de contrat dde travail*/
var dateEdition                 /*--Date        --Date édition document associé à un projet*/
var dateFinContrat              /*--Date        --Date fin de contrat collaborateur*/
var dateFinTache                /*--Date        --Date fin intervention d'un développeur sur une tâche d'un Sprint*/
var datePrevDeb                 /*--Date        --Date prévisionnelle de début de projet*/
var datePrevFin                 /*--Date        --Date prévisionnelle de fin de projet*/
var dateReelDeb                 /*--Date        --Date réelle de début de projet*/
var dateReelFin                 /*--Date        --Date réelle de fin de projet*/
var duree                       /*--Entier      --Durée cumulée de collaboration d'un contact client à un projet*/
var effectif                    /*--Entier      --Effectif client*/
var fonctionCollabo             /*--Char(25)    --Fonction du collaborateur*/
var fonctionContact             /*--Char(25)    --Fonction du contact client*/
var idActiv                     /*--Entier      --Numéro activité client*/
var idSprint                    /*--Entier      --Numéro Sprint*/
var idClient                    /*--Entier      --Numéro Client*/
var idContact                   /*--Entier      --Numéro Contact client*/
var idTache                     /*--Entier      --Numéro tâche réalisée par développeur*/
var idDoc                       /*--Entier      --Numéro de document*/
var idFonc                      /*--Entier      --Numéro fonction*/
var idSect                      /*--Entier      --Numéro Secteur d'activité*/
var infoTechniques              /*--Char ???    --Informations sur l'environnement technique du projet (à préciser)*/
var matricule                   /*--Entier      --Numéro matricule du collaborateur*/
var motif                       /*--Char(255)   --Motif du CDD ou intérim (remplacement, renfort, ...)*/
var mission                     /*--Char(255)   --Mission confiée à un stagiaire*/
var nature                      /*--Char(25)    --Nature du client (principale, secondaire, ancienne)*/
var nbMaxiCol                   /*--Entier      --Nombre maxi de collaborateurs affectés au projet*/
var nomCollabo                  /*--Char(32)    --Nom du collaborateur*/
var nomContact                  /*--Char(32)    --Nom du contact client*/
var nomProjet                   /*--Char(32)    --Nom du projet*/
var prenomCollabo               /*--Char(32)    --Prénom du collaborateur*/
var prenomContact               /*--Char(32)    --Prénom du contact client*/
var raisonSociale               /*--Char(32)    --Raison sociale du client*/
var remarqueEstim               /*--Char(255)   --Remarques sur l'estimation du projet*/
var resume                      /*--Char(255)   --Résumé d'un document associé au projet*/
var salaireBrut                 /*--Decimal     --Salaire brut du collaborateur*/
var indemnite                   /*--Decimal     --Imdemnité de stage*/
var secteur                     /*--Char(25)    --Secteur d'activité du projet*/
var telContact                  /*--Char(15)    --Numéro de téléphone du contact client*/
var titre                       /*--Char(255)   --Titre du document associé au projet*/
var typeProjet                  /*--Char(25)    --Type de projet : forfait, assistance, régle*/
var typeSociete                 /*--Char(25)    --Type de société cliente*/
var telephoneClient             /*--Char(15)    --Numéro tél entreprise cliente*/
var ecole                       /*--Char(255)   --Ecole du stagiaire*/
var agenceInterim               /*--Char(255)   --Agence d'intérim*/
var photo                       /*--Char(255)   --Photographe du collaborateur ou contact (ref du fichier image)*/
var nombreStoriesSprint         /*--Entier      --Nombre de User Stories du Sprint*/
var valeurMetierSprint          /*--Entier      --Valeur Métier cumulée des Stories du Sprint acceptées par le PO*/
var velociteSprint              /*--Entier      --Vélocité équipe sur un Sprint calculée par le Scrum Master*/
var dureeSprint                 /*--Entier      --Nombre de jours effectif du Sprint*/
var dateDebutSprint             /*--Date        --Date début du Sprint*/
var tailleEquipeSprint          /*--Entier      --Nombre de collaborateurs travaillant sur le Sprint*/
var nbreAcceptStoriesSprint     /*--Entier      --Nombre de User Stories du Sprint acceptées par le PO*/  
var nbreDefectStoriesSprint     /*--Entier      --Nombre de User Stories du Sprint refusées par le PO*/
var dateFinSprint               /*--Date        --Date de fin du Sprint*/
var statut                      /*--Char(20)    --Statut du collaborateur (cadre, non-cadre, ...)*/
var qualification               /*--Char(20)    --Qualification du collaborateur*/
