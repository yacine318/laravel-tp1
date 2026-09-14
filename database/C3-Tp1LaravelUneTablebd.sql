
INSERT INTO `produit` (`idPdt`, `libellePdt`, `prixPdt`, `stockPdt`) VALUES
(1, 'mars', 1, 10),
(2, 'bounty', 2, 200),
(3, 'nuts', 3, 30),
(4, 'lion', 4, 40),
(5, 'Bueno', 5, 50),
(6, 'Twix', 6, 60);


ALTER TABLE `produit`
  MODIFY `idPdt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
