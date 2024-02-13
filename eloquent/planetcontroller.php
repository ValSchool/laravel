use App\Models\Planet;

class PlanetController extends Controller
{
    public function getPlanets()
    {

        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);
    }
}
