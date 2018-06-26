<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seek;
use App\Models\ResponseSeek;
use App\User;

class MapController extends Controller
{

	public function index()
	{

	}

    public function map()
    {
        $title = "Map";
        $description = "Veja todos os pontos cadastrados pelos usuários.";
        return view('maps', compact('title', 'description'));
    }

    public function getMarker()
    {
        $seeks = Seek::join("users as u", "u.id", "=", "seek.user_id")
                     ->select("seek.id", "seek.topic", "seek.description", "seek.lat", "seek.lng", "u.name", "seek.created_at")
                     ->get();
        return $seeks->toArray();
    }

    public function edit($id)
    {
    	$title = "Editar Solicitação";
    	$description = "";
        $seek = Seek::where("seek.id", $id)
                    ->select("seek.*")
                    ->first();

        $response = ResponseSeek::where("seek_id", $seek->id)
                    ->select("response_seek.*")
                    ->first();
                    
        return view("edit-seek", compact('title', 'description', 'seek', 'response'));
        
    }

    public function allSeek($id = null)
    {
        $title = "Todas as Solicitações";
        $description = "Veja todas as Solicitações cadastradas por usuários.";
        $seeks = Seek::join("users", "users.id", "=", "seek.user_id")
                     ->select("seek.*", "users.name AS user_name")
                     ->orderBy("seek.id", "DESC");

        if ($id) {
            $seeks->where("seek.user_id", $id);
        }

        $seeks = $seeks->get();

        return view("all-seek", compact('seeks', 'title', 'description'));
    }

    public function allUser()
    {
        $title = "Todos os Usuários";
        $description = "Veja todos os Usuários cadastrados.";
        $users = User::leftJoin("seek", "seek.user_id", "=", "users.id")
                     ->select("users.id", "users.name", "users.user", \DB::raw("COUNT(seek.id) AS seeks"), "users.gender", "users.deficiency")
                     ->where("users.id", "<>", 1)
                     ->groupBy("users.id", "users.name", "users.user", "users.gender", "users.deficiency")
                     ->orderBy("users.id", "DESC")
                     ->get();

        return view("all-user", compact('users', 'title', 'description'));
    }
}
