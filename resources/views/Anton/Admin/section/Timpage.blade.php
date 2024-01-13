@extends('Anton.Admin.layouts.Landingpage')
@section('Tim')

<td width="753" height="250" align="left" bgcolor="#FFFFFF">
    <div align="center">DAFTAR TIM
    </div>
    <table width="755" border="0">
        <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <p align="left"><a href="/dashboard/tim/create">+ Tambah TIM </a></p>
                <p>
                <table border="0">
                    <tr bgcolor="#B0B0B0">
                        <th><small>NO</small></th>
                        <th><small>Judul TIM</small></th>
                        <th><small>Isi TIM</small></th>
                        <th><small>Gambar</small></th>
                        <th><small>AKSI</small></th>
                    </tr>
                    <tr bgcolor="#E4E4E4">
                        <td><small>

                            </small></td>
                        <td><small>

                            </small></td>
                        <td><small>

                            </small></td>
                        <td><small><img src="profil/foto/" height="30" width="30"></small></td>
                        <td><small><a href="?page=hapus_profil&id="
                                    onClick="return confirm('Apakah Anda ingin menghapus data ?')">
                                    Hapus </a> | <a href="?page=edit_profil&id=">Edit</a> </small></td>
                    </tr>
                </table>
                </p>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</td>


@endsection