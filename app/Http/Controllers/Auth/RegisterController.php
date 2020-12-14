<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Arsitek;
use App\Models\Pelanggan;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravolt\Avatar\Avatar;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['role'] == 'arsitek') {
            return Validator::make($data, [
                'nama_depan' => ['required', 'string', 'max:255'],
                'nama_belakang' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'jenis_kelamin' => ['required'],
                'tanggal_lahir' => ['required'],
                'alamat' => ['required', 'string'],
                'no_hp' => ['required', 'numeric'],
                'nik' => ['required', 'numeric', 'min:13'],
                'ktp' => ['required', 'image', 'mimes:jpg,png', 'max:5000'],
                'ijazah' => ['required', 'image', 'mimes:jpg,png', 'max:5000'],
            ]);
        } else {
            return Validator::make($data, [
                'nama_depan' => ['required', 'string', 'max:255'],
                'nama_belakang' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'jenis_kelamin' => ['required'],
                'tanggal_lahir' => ['required'],
                'alamat' => ['required', 'string'],
                'no_hp' => ['required', 'numeric'],
                'nik' => ['required', 'numeric', 'min:13'],
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data['ijazah'], $data['ktp']);
        $file = $data['ijazah'];
        $file1 = $data['ktp'];
        $ijazah = 'ijazah_' . time() . '_' . $data['nama_depan'] . '.' . $file->getClientOriginalExtension();
        $ktp = 'ktp_' . time() . '_' . $data['nama_depan'] . '.' . $file1->getClientOriginalExtension();
        dd($ijazah, $ktp);

        $avatar =  new Avatar();
        // dd($avatar->create($data['nama_depan'] . $data['nama_belakang'])->to());
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'avatar' => $avatar->create($data['nama_depan'] . $data['nama_belakang'])->toGravatar()
        ]);

        if ($data['role'] == 'pelanggan') {
            Pelanggan::create([
                'nama_depan' => $data['nama_depan'],
                'nama_belakang' => $data['nama_belakang'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'user_id' => $user->id
            ]);
        } else {

            Arsitek::create([
                'nama_depan' => $data['nama_depan'],
                'nama_belakang' => $data['nama_belakang'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'user_id' => $user->id,
                'nik' => $data['nik'],
                'ktp' => $ktp,
                'ijazah' => $ijazah
            ]);
        }

        return $user;
    }
}
