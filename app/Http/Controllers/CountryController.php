<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * Class CountryController
 *
 * @package App\Http\Controllers
 */
class CountryController extends Controller
{
    /**
     * @var Countries
     */
    private $countryDb;

    /**
     * CountryController constructor.
     *
     * @param Countries $countryDb
     */
    public function __construct(Countries $countryDb)
    {
        $this->countryDb = $countryDb;
    }

    public function index()
    {
        $data['countries'] = $this->countryDb->with(['currency', 'continent'])->simplePaginate(15);
        return view('countries.index', $data);
    }

    public function show($countryId)
    {
        try {
            $data['country'] = $this->countryDb->with(['currency', 'continent'])->findOrFail($countryId);
            return view('countries.show', $data);
        } catch(ModelNotFoundException $modelNotFoundException) {
            app()->abort(404);
        }
    }
}
