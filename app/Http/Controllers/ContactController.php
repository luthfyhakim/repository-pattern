<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        return $this->contactRepository->getAll();
    }

    public function show($id)
    {
        return $this->contactRepository->findById($id);
    }
}
