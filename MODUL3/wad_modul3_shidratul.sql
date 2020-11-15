 CREATE TABLE `event` (
  `id` int(11) ,
  `nama` varchar(100),
  `deskripsi` text,
  `gambar` varchar(255),
  `kategori` varchar(255),
  `tanggal` date,
  `mulai` time,
  `berakhir` time,
  `tempat` varchar(100),
  `harga` bigint(20),
  `benefit` varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `event`
  ADD PRIMARY KEY (`nama`);
 
--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `event`
  MODIFY `nama` varchar(100) NOT NULL AUTO_INCREMENT;
COMMIT;
