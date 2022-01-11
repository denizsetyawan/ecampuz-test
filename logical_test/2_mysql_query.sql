SELECT mhs_nama FROM tb_mahasiswa
INNER JOIN tb_mahasiswa_nilai
ON tb_mahasiswa.mhs_id=tb_mahasiswa_nilai.mhs_id
INNER JOIN tb_matakuliah
ON tb_mahasiswa_nilai.mk_id=tb_matakuliah.mk_id
WHERE tb_matakuliah.mk_kode='MK303' AND (SELECT MAX(tb_mahasiswa_nilai.nilai))