-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2019 at 08:17 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotidiano`
--

-- --------------------------------------------------------

--
-- Table structure for table `articolo`
--

CREATE TABLE `articolo` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `titolo` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `testo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articolo`
--

INSERT INTO `articolo` (`id`, `data`, `titolo`, `testo`, `name`, `image`) VALUES
(4, '2019-10-26', 'Allerta Rossa della PROTEZIONE CIVILE in Emilia-Romagna', 'Eâ€™ stata riaperta in mattinata, a una sola corsia per senso di marcia, lâ€™A21 Torino-Piacenza, chiusa ieri sera tra Asti e Villanova per lâ€™apertura di una voragine causata dalle forti piogge. Dalle dieci di stamane il ritorno alla normalitÃ .\r\n\r\nLe scuole superiori di Asti rimangono chiuse su decisione del sindaco Maurizio Rasero in conseguenza del blocco parziale dell\'autostrada e delle prevedibili ripercussioni sul traffico in cittÃ . La situazione Ã¨ ancora difficile anche in provincia di Cuneo, con numerose provinciali chiuse al transito per allagamenti. Ha invece riaperto il tratto dell\'autostrada A5, tra Ivrea e Pont-Saint-Martin in Valle Dâ€™Aosta, che era stato chiuso sabato scorso per la frana in localitÃ  Chiappetti a Quincinetto. Resta invece interrotta nelle due direzioni la A6 Torino-Savona (tra Savona ed Altare verso nord e tra Millesimo e Savona verso sud) dopo il crollo di una pila del viadotto â€œMadonna del Monteâ€, investita ieri pomeriggio da una frana. Desta ancora preoccupazione la Calabria, dove piove ininterrottamente da sabato sera e domenica alcune strade erano state invase dall\'acqua a Reggio e Lamezia Terme (Catanzaro) con gravi allagamenti e disagi.', '', ''),
(9, '2019-11-23', 'Terremoto  in Albania: scossa di magnitudo 6.5 al largo di Durazzo, almeno sette morti', 'Una forte scossa di terremoto di magnitudo 6.5 ha colpito alle 2,54 ora locale (le 3,54 in Italia) la costa settentrionale dell\'Albania, vicino a Durazzo. Secondo i dati dell\'Istituto nazionale di geofisica e vulcanologia (Ingv) italiano e del servizio geologico statunitense Usgs, il sisma ha avuto ipocentro a circa dieci chilometri di profonditÃ  ed epicentro tra Shijak e Durazzo. Almeno sette persone hanno perso la vita. Nella capitale, Tirana, la gente Ã¨ scesa in strada in preda al panico, a Durazzo e Thuname crollati case e palazzi, dispersi, almeno 300 feriti, persone sotto le macerie.\r\n\r\n\r\nCRONACA\r\nTerremoto in Albania, la scossa avvertita anche in Campania\r\nDI ANNA LAURA DE ROSA\r\n\r\nUnitÃ  dell\'esercito e della protezione civile sono al lavoro tra le macerie di un palazzo a Durazzo e di altri tre a Thumana, dove sono stati tratti in salvo per ora due bambini. A Kurbin un uomo Ã¨ morto invece dopo essersi gettato dal balcone per tentare di mettersi in salvo.\r\n\r\n\r\n \"E\' stata una scossa forte e lunga, si muoveva tutto. In preda alla paura e al panico siamo corsi in strada\". Questo il racconto di Aida, italiana di origine albanese, da Tirana. \"Qui fortunatamente non ci sono stati danni importanti a differenza di Durazzo e dei paesi vicini dove ci sono stati diversi crolli\", aggiunge. \"Noi siamo al primo piano - racconta Aida che in questi giorni si trova nella capitale albanese in visita alla sua famiglia - e appena sentita la scossa abbiamo preso i miei nipoti di due e sette mesi e siamo andati in strada. E qui restiamo al momento perchÃ© le repliche, seppur piÃ¹ brevi e meno intense, continuano\".\r\n\r\nLe prime immagini dall\'Albania arrivano su Twitter, alcune case completamente crollate.', '', ''),
(11, '2019-11-23', 'Violenza sulle donne registra un omicidio ogni due ore', 'In Brasile la violenza sulle donne Ã© diffusa. Con omicidi, stupri e altri crimini motivati proprio dalla differenza di genere. Dati preoccupanti arrivano dai due piÃ¹ popolosi stati del paese sudamericano, San Paolo e Rio de Janeiro.Nel 2018 il numero di omicidi di donne in Brasile ha diminuito del 6,7% rispetto all anno precedente. Ma i numeri sono preoccupanti: nel paese sudamericano l anno scorso sono state uccise 4.254 donne, una ogni due ore. E i casi di femminicidio , ossia quelli registrati come crimini di odio motivati proprio dalla condizione di genere, sono stati 1.173, contro i 1.047 del 2017.\r\n\r\nNumeri preoccupanti, che si sommano a quelli che arrivano dagli stati di Rio de Janeiro e San Paolo, dove le statistiche mostrano impennate di violenza sessuale e di genere contro le donne.\r\n\r\nI numeri dei femminicidi, raccolti in una ricerca del giornale G1 con il Nucleo di studio della violenza della UniversitÃ  di San Paolo e dal Forum brasiliano di sicurezza pubblica, inoltre, potrebbero essere parziali. Non tutti i dati statistici, infatti, sono registrati allo stesso modo nei singoli stati della federazione brasiliana e non tutti gli stati hanno le stesse capacitÃ Â  o lo stesso interessi nel voler divulgare questi numeri.', '', ''),
(17, '2019-12-03', 'CittÃ  Intelligenti e Smart Mobility al MISE', 'â€œCittÃ  Intelligenti, Smart Mobility e Logisticaâ€, questo il nome dellâ€™incontro. Tre i principali temi affrontati: predisposizione di un terreno di gioco comune tra amministrazioni per garantire una convergenza di risorse, condivisione delle esperienze piÃ¹ significative avviate in Italia su questi settori e definizione di strategie per la costruzione di ecosistemi pilota dedicati a mobilitÃ  e logistica intelligente nelle aree apripista per lâ€™introduzione del 5G. Queste le parole di della sottosegretaria Alessandra Todde.\r\n\r\nIl MiSE ha voluto organizzare questo workshop per farsi promotore della costruzione di un ecosistema basato sul partenariato pubblico e privato, funzionale allo sviluppo di una mobilitÃ  e di una logistica intelligente, autonoma e a impatto zero â€“ ha dichiarato la Sottosegretaria Todde durante il suo intervento di apertura.\r\n\r\nPrenderÃ  corpo ora la linea di intervento per quanto concerne gli appalti di innovazione con 50 milioni di euro giÃ  stanziati. Da definire le aree entro le quali condurre le sperimentazioni. Prosegue Todde.\r\n\r\nLa mobilitÃ  nelle CittÃ  Intelligenti necessita di un forte indirizzo pubblico. Per il loro sviluppo non possiamo prescindere da una Economia Circolare che Ã¨ peculiare nel nostro Paese, povero di materie prime e dipendente dalle importazioni, quindi naturalmente votato al riciclo.', NULL, NULL),
(18, '2019-12-09', 'InsultÃ² una ragazza di colore sul bus: condannato a quattro mesi con la condizionale', 'Quattro mesi con la condizionale per aver insultato una ragazzina di colore sul bus. Ãˆ la condanna inflitta oggi al sessantenne che nel novembre 2017, sul pullman della linea 63, lâ€™aveva apostrofata in maniera razzista dicendole: \"E\' inutile che vai a scuola, tanto finisci in strada. Tornatene al tuo paese\". Lâ€™ex procuratore Armando Spataro aveva ricevuto nel suo ufficio la vittima, giovane promessa del basket, e le aveva regalato una copia del poster del celebre quadro di Norman Rockwell sulla fine dell\'apartheid nella Louisiana del 1960. L\'uomo era stato individuato dai carabineri, coordinati dal pm Eugenia Ghi, grazie alle telecamere di sorveglianza del bus.', NULL, NULL),
(19, '2019-11-22', 'PerchÃ© lâ€™Amazzonia sta bruciando? ', 'Gli incendi in Amazzonia sembrano suscitare meno clamore dopo la mobilitazione internazionale â€” e le misure straordinarie messe in atto dal presidente Jair Bolsonaro, che ha inviato 44 mila soldati nella foresta â€” ma proprio a settembre lâ€™emergenza rischia di diventare piÃ¹ feroce. Normalmente, stima il World Resources Institute, il 62% dei fuochi di ogni anno nella foresta pluviale Ã¨ appiccato a settembre.\r\n\r\nLe queimadas, cioÃ¨ i fuochi usati da agricoltori e allevatori per ricavare nuovi campi e pascoli, o per rigenerarli, sono la causa principale della deforestazione in Amazzonia: lâ€™80%, secondo un istituto di ricerca forestale dellâ€™universitÃ  di Yale, viene appiccato per lasciare posto a pascoli; un altro 10-15% a coltivazioni intensive, soprattutto di soia (molto usata per produrre mangimi). Un fenomeno legato allâ€™amministrazione Bolsonaro? Non proprio. Basta un occhio alle serie storiche per notare che la deforestazione dellâ€™Amazzonia procede dal 1972 â€” cioÃ¨ da che fu ultimata lâ€™autostrada Transamazzonica â€” e che negli ultimi quarantâ€™anni la superficie coperta da foresta si Ã¨ ridotta del 20%.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'its2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articolo`
--
ALTER TABLE `articolo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articolo`
--
ALTER TABLE `articolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
