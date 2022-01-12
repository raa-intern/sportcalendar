<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LettersController extends Controller
{
    public function letters_list()
    {
        return view('postservice/letterslist', [
            'user' => 'admin']);
    }

    public function letter_create()
    {
        return view('postservice/newletter', [
            'user' => 'admin']);
    }

    public function letter_show_item()
    {
        return view('postservice/letter', [
            'user' => 'admin']);
    }

    public function letter_delete_item()
    {
        return view('postservice/message', [
            'user' => 'admin']);
    }

    public function notes_list()
    {
        return view('postservice/noteslist', [
            'user' => 'admin']);
    }

    public function recited_list()
    {
        return view('postservice/recitedlist', [
            'user' => 'admin']);
    }

     public function sent_list()
     {
        return view('postservice/sentlist', [
            'user' => 'admin']);
     }

     public function archive_list()
     {
        return view('postservice/archivelist', [
            'user' => 'admin']);
     }

      public function indicated_list()
      {
        return view('postservice/indicatedlist', [
            'user' => 'admin']);
      }

}
