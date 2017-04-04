<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_anggota';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'flag_akses', 'flag_tanggapan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'no_nasabah', 'simpanan_pokok', 'simpanan_smk', 'lembar_smk', 'status', 'status_cetak',
      'register_user', 'register_date', 'last_user', 'last_date', 'no_rekening1', 'status_channeling',
      'kode_produk', 'no_rek_tabungan', 'status_setoran_wajib', 'kode_ref', 'alasan_ttp',
      'kode_akses',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
