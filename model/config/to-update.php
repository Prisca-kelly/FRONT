ALTER TABLE `reservation`
CHANGE `statut` `statut` enum('nouveau','validé','Rejetée','Payée') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT
NULL DEFAULT 'nouveau' ;