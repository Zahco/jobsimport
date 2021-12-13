# Feedback

J'ai réalisé le test en 1h30 comme convenu.
Voici les quelques élément que j'aurai aimé améliorer si j'avais eu plus de temps.

- Je ne suis pas encore satisfait de **l'organisation** du code. L'idéal aurait été de tout ranger dans des dossiers pour plus de lisibilité, j'aurai aimer séparer l'entité, mon singleton sur la BDD, mes classes d'import et les fonction d'affichages.
- J'aurai pu créer des **interfaces** sur mes classes
- J'aurai pu créer un autre niveau d'abstraction. Ici on voit que les deux classes RegionsJobsImporter et TeaserJobsImporter parsent tous les deux un fichier xml, donc on aurait pu aller plus loin en créant une classe abstraite **XmlJobsImporter**
- Je n'ai pas du tout touché à la partie d'affichage, mais avec plus de temps, j'aurai créé une classe à part pour cette fonction.
- J'aurai aussi **refactorisé JobsLister** pour qu'il retourne un tableau de JobEntity
- J'aurai aussi aimé mettre en place un système pour stocker les constantes (comme les accès à la BDD) dans un fichier **non versionné** (ex: .env)
- Je n'ai pas osé installer des packages comme **Doctrine**, mais c'est clairement ce que j'aurai fait dans d'autre circonstance.
- J'aurai aimé faire plus de commit.
