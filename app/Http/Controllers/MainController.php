<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\FooterBottom;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Section2;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $navbar = Navbar::all();
        $section = Section2::all();
        $about_emoji = AboutUs::all();
        $feature_description = Feature::all();
        $service_card = Service::all();
        $portfolio_image = Portfolio::all();
        $testimonial_card = Testimonial::all();
        $team_image = Team::all();
        $contact_emoji = Contact::all();
        $footer_links = Footer::all();
        $bottom_copyright = FooterBottom::all();
        $titre = Titre::all();
        return view('main', compact('navbar', 'section', 'about_emoji', 'feature_description', 'service_card', 'portfolio_image', 'testimonial_card', 'team_image', 'contact_emoji', 'footer_links', 'bottom_copyright', 'titre'));
    }
}
