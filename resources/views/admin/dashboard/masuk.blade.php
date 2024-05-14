<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji - {{ $users->name }}</title>
</head>
<body>

    <table style="width: 100%;">
        <tr style="">
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="text-align: left;">
                        <h3>PT HR Management System</h3>
                    </div>
                </div>
            </td>
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="text-align: right;">
                        <span>Jl.Veteran 3 No.36, RT 001/RW 010</span><br>
                        <span>Kec. Kelapa Muda, Kel. Bencongan Pepaya</span><br>
                        <span>Kab, Medan, 15820</span><br>
                    </div>
                </div>
            </td>
        </tr>
        <br><br>
        <tr style="">
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <span>Nama Lengkap : {{ $users->name }}</span><br>
                        <span>ID Karyawan : {{ $users->employee_id }}</span><br>
                        <span>Jabatan : {{ $users->positions->name }}</span><br>
                    </div>
                </div>
            </td>
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <span>Jenis Kelamin :
                            @if ($users->jenis_kelamin == 'boy')
                                Laki-Laki
                            @elseif ($users->jenis_kelamin == 'girl')
                                Perempuan
                            @endif
                        </span><br>
                        <span>No Telepon : {{ $users->phone }}</span><br>
                        <span>Mulai Kerja : {{ $users->joining_date }}</span>
                    </div>
                </div>
            </td>
        </tr>
        <br><br>

        <tr style="">
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-weight: bold; background-color:#c9c8c3;">Pendapatan</span><br>
                    <div >
                        <span>Gaji Pokok        : Rp. {{ number_format($users->gaji, 0, ',', '.') }}</span><br>
                        <span>Tunjangan Jabatan : Rp. {{ number_format($users->tunjangan_jabatan, 0, ',', '.') }}</span><br>
                        <span>Biaya Lembur      : Rp. {{ number_format($users->lembur, 0, ',', '.') }}</span><br>
                        <span>Biaya Makan       : Rp. {{ number_format($users->uang_makan, 0, ',', '.') }}</span><br>
                        <span style="font-weight: bold;">Total Pendapatan : {{ number_format($users->gaji + $users->tunjangan_jabatan + $users->lembur + $users->uang_makan, 0, ',', '.') }}</span>
                    </div>
                </div>
            </td>
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="font-weight: bold; background-color:#c9c8c3;">Pengeluaran</span><br>
                    <div >
                        <span>Potongan BPJS  : Rp. {{ number_format($users->pot_bpjs, 0, ',', '.') }}</span><br>
                        <span>Potongan Pajak : Rp. {{ number_format($users->pot_pajak, 0, ',', '.') }}</span><br>
                        <span>Potongan JHT   : Rp. {{ number_format($users->pot_jht, 0, ',', '.') }}</span><br><br>
                        <span style="font-weight: bold;">Total Pengeluaran : {{ number_format($users->pot_bpjs + $users->pot_pajak + $users->pot_jht, 0, ',', '.') }}</span>
                    </div>
                </div>
            </td>
        </tr>
        <br><br><br><br>
        <tr style="">
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="border: 1px solid #000; text-align: left;">
                        <span>Total Penerimaan Bulan Ini</span>
                        <h1>Rp. {{ number_format($users->gaji + $users->tunjangan_jabatan + $users->lembur + $users->uang_makan - $users->pot_bpjs - $users->pot_pajak - $users->pot_jht, 0, ',', '.') }}</h1>
                    </div>
                </div>
            </td>
            <td style="width: 50%;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="text-align: right;">
                        <span>Jakarta Pusat, 08 Mei 2024</span><br>
                        <span>Human Resources</span><br><br><br><br>
                        <span>Irwan Prasetyo</span>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    

</body>
</html>
