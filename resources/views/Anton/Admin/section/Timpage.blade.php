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

                    @foreach ($data as $Data)
                    <tr bgcolor="#E4E4E4">

                        <td><small>
                                {{ $Data->id }}

                            </small></td>
                        <td><small>
                                {{ $Data->judul_profil }}

                            </small></td>
                        <td><small>
                                {{ $Data->isi_profil }}

                            </small></td>
                        <td><small><img src="/admin/admin/profil/foto/{{ $Data->fupload }}
                            " height="30" width="30"></small></td>

                        <td>
                            <small>

                                <form action="/dashboard/tim/{{ $Data->id }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                    <button type=" submit" href="/dashboard/tim/{{ $Data->id }}"
                                        onClick="return confirm('Apakah Anda ingin menghapus data ?')">
                                        Hapus </button>
                                </form>


                                | <a href="/dashboard/tim/{{ $Data->id }}/edit">Edit</a>
                            </small>
                        </td>

                    </tr>
                    @endforeach
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