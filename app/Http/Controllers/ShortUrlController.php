<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use App\Models\ShortUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function short(ShortRequest $request)
    {
        if($request->original_url) {
            if(auth()->user()) {
                $new_url = auth()->user()->links()->create([
                    'original_url' => $request->original_url
                ]);
            } else {
                $new_url = ShortUrl::create([
                    'original_url' => $request->original_url
                ]);
            }
            if($new_url) {
                $short_url = base_convert($new_url->id, 10,36);
                $new_url->update([
                    'short_url' => $short_url
                ]);

                return redirect()->back()->with('success message', 'Tautan Baru : <a href="'.url($short_url).'" class="text-yellow-500">'. url($short_url).'</a>');
            }
        }
        return back();
    }

    public function show($code){
        $short_url = ShortUrl::where('short_url', $code)->first();

        if($short_url){
            $short_url->increment('visits');
            return redirect()->to(url($short_url->original_url));
        }
        return redirect()->to(url('/'));
    }

    public function delete($id){
    $links = ShortUrl::find($id);

    if ($links) {
        $links->delete();
        return redirect()->to('/links');
    }
    // Tambahkan pesan atau redirect ke halaman yang sesuai jika diperlukan
    }
}
