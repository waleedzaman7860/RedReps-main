<?php

namespace App\Http\Controllers;

use App\Mail\CareerAdmin;
use App\Mail\CareerMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeUnit\FunctionUnit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome', ['pricing' => $this->pricing]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'vacancy' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'jobtitle' => 'required',
            'employer' => 'required',
            'experience_year' => 'required|numeric',
            'education_level' => 'required',
            'resume' => 'required|file',
            'cover_letter' => 'nullable|file',
            'job_opening' => 'required',
            'availability' => 'required',
        ]);

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $data['resume_path'] = $resumePath;
        }
        if ($request->hasFile('cover_letter')) {
            $resumePath = $request->file('cover_letter')->store('cover_letter', 'public');
            $data['cover_letter_path'] = $resumePath;
        }
        Mail::to($request->input('email'))->send(new CareerMail($data));


        Mail::to(env('ADMIN_EMAIL'))->send(new CareerAdmin($data));


        return redirect()->route('home')->with('success', "Congratulations! You've applied for $request->vacancy successfully. Thanks.");
    }



    public function contact_store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Mail::to(env('ADMIN_EMAIL'))->send(new ContactMail($data));
        return redirect()->route('home');
    }

    public function array($page)
    {
        $pagedata = [
            'task-genie' => [
                'heading' => 'Task Genie',
                'sub-heading' => 'Ultimate Task-Taming Superstar!',
                'hero-image' => asset('assets/task_genie.svg'),
                'details' => [
                    [
                        'heading' => "Lightning-Fast Productivity",
                        'description' => "Watch in awe as Task Genie blitzes through your
                        to-do list at warp speed. With its turbo-charged efficiency, tasks are completed in a flash, leaving you with more time
                        to kick back and enjoy the finer things in life.",
                    ],
                    [
                        'heading' => "Mojo Multiplier",
                        'description' => "Task Genie has a secret formula to boost your productivity mojo to
                        unprecedented levels. It sprinkles a dash of enchantment on every task, transforming them into a
                        breeze and helping you achieve superhuman feats of efficiency.",
                    ],
                    [
                        'heading' => "Magic Assistance",
                        'description' => "Watch in awe as Task Genie blitzes through your
                        to-do list at warp speed. With its turbo-charged efficiency, tasks are completed in a flash, leaving you with more time
                        to kick back and enjoy the finer things in life.",
                    ],
                    [
                        'heading' => "Funky Fusion",
                        'description' => "Task Genie doesn't just get the job done; it adds a touch of funky flair
                        to everything it does. With its infectious energy and groovy vibes, Task Genie turns mundane
                        tasks into an electrifying experience.",
                    ],

                    [
                        'heading' => "Infinite Possibilities",
                        'description' => "Are you currently using one of the top SaaS businesses, according to the
                        team at Lunar Strategy? Check out this list of our top SaaS",
                    ],

                    [
                        'heading' => "Groovy Collaboration",
                        'description' => "Are you currently using one of the top SaaS businesses, according to the
                        team at Lunar Strategy? Check out this list of our top SaaS",
                    ],

                ],
            ],
            'tech-whiz' => [
                'heading' => 'Tech Whiz',
                'sub-heading' => 'The Ultimate Tech-Tastic Wizard',
                'hero-image' => asset('assets/tech_whiz.svg'),
                'details' => [

                    ['heading' => "Techno Sorcery", 'description' => "Tech Whiz harnesses the power of techno sorcery to conjure up technological marvels that will leave you spellbound. From troubleshooting glitches to defying gravity with mind-boggling solutions, Tech Whiz is your go-to guru for all things tech."],

                    ['heading' => "Code Crafting", 'description' => "Watch in awe as Tech Whiz weaves lines of code into masterpieces of digital wizardry. With its coding prowess and programming prowess, Tech Whiz can create software spells that bring your wildest tech dreams to life."],

                    ['heading' => "Geeky Genius", 'description' => "Tech Whiz is not just smart; it's a certified geeky genius. With its encyclopedic knowledge of all things tech-related, Tech Whiz can unravel even the most perplexing tech mysteries and provide solutions that will make your jaw drop."],

                    ['heading' => "Lightning-Fast Fixes", 'description' => "Tech Whiz operates at the speed of light when it comes to fixing tech troubles. Whether it's a crashing website, a misbehaving gadget, or a network conundrum, Tech Whiz swoops in with lightning- fast speed to save the day."],

                    ['heading' => "Funky Tech Solutions", 'description' => "Tech Whiz doesn't settle for ordinary tech solutions; it adds a touch of funkiness to every fix. With its out-of-the-box thinking and unconventional approaches, Tech Whiz turns tech challenges into opportunities for creative expression."],

                    ['heading' => "Tech Charisma", 'description' => "Tech Whiz doesn't just possess technical expertise; it exudes tech charisma. Its infectious enthusiasm and magnetic personality make tech conversations exciting and turn tech support into a groovy experience."],

                ],
            ],
            'marketing-maverick' => [
                'heading' => ' Marketing Maverick',
                'sub-heading' => 'The Unconventional Genius of Marketing',
                'hero-image' => asset('assets/marketing.svg'),
                'details' => [
                    ['heading' => "Rule Breaker Extraordinaire", 'description' => "Marketing Maverick thrives on breaking the rules of traditional marketing. With its out-of-the-box thinking and daring strategies, it turns the world of marketing upside down and leaves competitors in awe."],

                    ['heading' => "Creative Conjurer", 'description' => "Watch in amazement as Marketing Maverick conjures up captivating campaigns and mesmerizing content. From catchy slogans to eye-popping visuals, its creative wizardry will leave a lasting impression on your audience."],

                    ['heading' => "Data Diviner", 'description' => "Marketing Maverick has a sixth sense for data. With its analytical prowess and sharp insights, it uncovers hidden patterns, identifies untapped opportunities, and guides your marketing efforts with data- driven precision."],

                    ['heading' => "Social Media Sorcery", 'description' => "Witness the magic of Marketing Maverick as it casts spells on social media platforms. From viral campaigns to engaging posts, it knows the secrets of capturing attention and captivating audiences in the digital realm."],

                    ['heading' => "Branding Wizardry", 'description' => "Marketing Maverick has a knack for brand alchemy. It can transform a dull brand into a vibrant powerhouse, crafting an identity that resonates with your target audience and leaves a lasting impression."],

                    ['heading' => "Storytelling Maestro", 'description' => "Marketing Maverick weaves captivating stories that captivate hearts and minds. With its storytelling prowess, it brings your brand narrative to life, creating emotional connections that forge lifelong customer relationships."],


                ],
            ],
            'money-master' => [
                'heading' => 'Money Master',
                'sub-heading' => 'The Ultimate Financial Guru',
                'hero-image' => asset('assets/money_master.svg'),
                'details' => [
                    ['heading' => "Cash Conqueror", 'description' => " Money Master has the power to conquer your financial challenges. It unravels the mysteries of money, turning you into a fearless warrior of wealth and prosperity."],

                    ['heading' => "Budgeting Wizard", 'description' => " Watch in awe as Money Master weaves its budgeting magic. With its enchanting spells, it transforms your financial chaos into a well-organized dance of dollars, ensuring every penny is accounted for."],

                    ['heading' => "Debt Demolisher ", 'description' => "Witness the power of Money Master as it annihilates your debt. With its strategic plans and ruthless determination, it frees you from the shackles of loans and credit card balances, empowering you to reclaim your financial freedom."],

                    ['heading' => "Savings Sorcerer", 'description' => " Money Master knows the secrets to summoning savings. With its clever tactics and magical techniques, it helps you build a fortress of financial security, ensuring you have a safety net for a rainy day."],

                    ['heading' => "Retirement Guru ", 'description' => "Watch as Money Master unveils the path to a blissful retirement. With its foresight and wisdom, it helps you plan for the golden years, ensuring you can enjoy a life of leisure and fulfillment."],

                    ['heading' => "Financial Freedom Champion", 'description' => "Money Master is the ultimate champion of financial freedom. It teaches you the art of passive income, helping you break free from the chains of the 9-to-5 grind and live life on your own terms."],


                ],
            ],
            'data-jedi' => [
                'heading' => 'Data Jedi',
                'sub-heading' => 'The Ultimate Tech-Tastic Wizard',
                'hero-image' => asset('assets/data_jedi.svg'),
                'details' => [
                    [
                        'heading' => "Lightning-Fast Productivity",
                        'description' => "Watch in awe as Task Genie blitzes through your to-do list at warp speed. With its turbo-charged efficiency, tasks are completed in a flash, leaving you with more time to kick back and enjoy the finer things in life.",
                    ],
                    [
                        'heading' => "Mojo Multiplier",
                        'description' => "Task Genie has a secret formula to boost your productivity mojo to unprecedented levels. It sprinkles a dash of enchantment on every task, transforming them into a breeze and helping you achieve superhuman feats of efficiency.",
                    ],
                    [
                        'heading' => "24/7 Magic Assistance",
                        'description' => "Task Genie never sleeps because it knows that inspiration can strike at any time. Whether it's the middle of the night or during a spontaneous dance party, Task Genie is always on call to tackle your tasks with gusto. They doesn't just get the job done.",
                    ],
                    [
                        'heading' => "Funky Fusion",
                        'description' => "Task Genie doesn't just get the job done; it adds a touch of funky flair to everything it does. With its infectious energy and groovy vibes, Task Genie turns mundane tasks into an electrifying experience.",
                    ],

                ],
            ],
            'word-ninja' => [
                'heading' => 'Word Ninja',
                'sub-heading' => 'Master of Verbal Vortex',
                'hero-image' => asset('assets/word_ninja.svg'),
                'details' => [
                    ['heading' => "Linguistic Warriors", 'description' => "Brace yourself for the verbal prowess of the Word Ninja! Armed with the sharpest wit and the deadliest puns, they slice through the chaos of words with their linguistic expertise, crafting compelling content that captivates and mesmerizes."],

                    ['heading' => "Grammar Samurai", 'description' => "Watch in awe as the Word Ninja wields their grammar katana with precision. They vanquish grammatical errors, conquer run-on sentences, and ensure every word aligns perfectly in the battle for flawless communication."],

                    ['heading' => "Creative Wordsmiths", 'description' => "The Word Ninja channels their creative energy to weave stories that transport readers to new dimensions. With their arsenal of imagination and literary finesse, they breathe life into words, turning mundane sentences into epic adventures."],

                    ['heading' => "SEO Assassins", 'description' => "Witness the stealth of the Word Ninja as they navigate the shadows of search engine algorithms. With their keyword mastery and optimization skills, they strike with precision, ensuring your content climbs the ranks and dominates the digital landscape."],

                    ['heading' => "Content Sorcerers", 'description' => "Prepare to be spellbound by the magical content spells cast by the Word Ninja. They blend words and ideas, infusing them with enchanting charm and captivating storytelling, leaving readers bewitched and craving for more."],

                    ['heading' => "Social Media Warriors", 'description' => "Watch the Word Ninja conquer social media platforms with their witty one-liners and viral content strategies. They navigate the digital battlefield with agility, engaging audiences and igniting conversations that spread like wildfire."],


                ],
            ],
            'linguister' => [
                'heading' => 'Linguister',
                'sub-heading' => 'Master of Multilingual Mayhem',
                'hero-image' => asset('assets/linguister.svg'),
                'details' => [
                    ['heading' => "Language Juggernauts", 'description' => " Brace yourself for the linguistic acrobatics of the Linguister! With their tongue- twisting talents and mind-bending multilingual skills, they conquer language barriers and bridge cultural gaps like no other."],

                    ['heading' => "Polyglot Powerhouses", 'description' => " The Linguister is a linguistic powerhouse, fluent in a myriad of languages. They effortlessly switch between tongues, mesmerizing audiences with their linguistic prowess and leaving everyone in awe of their language command."],

                    ['heading' => "Translation Titans", 'description' => " Watch in amazement as the Linguister takes on the challenge of translation with unrivaled precision. They flawlessly transform words from one language to another, capturing the essence and nuance of the original message."],

                    ['heading' => "Interpretation Superstars", 'description' => " Witness the Linguister's interpretive genius as they bring real-time conversations to life. With lightning-fast reflexes and an acute understanding of cultural context, they ensure seamless communication between language speakers."],

                    ['heading' => "Localization Magicians", 'description' => " Prepare to be enchanted by the Linguister's localization spells. They adapt content to fit different cultural contexts, ensuring that your message resonates with audiences around the globe and sparks connections on a global scale."],

                    ['heading' => "Transcreation Wizards", 'description' => " The Linguister possesses the magical ability to transcreate. They take your brand's message and infuse it with cultural relevance and creative flair, delivering a localized experience that captivates audiences and drives brand success."],


                ],
            ],
        ];

        try {
            $data = $pagedata[$page];
            $pricing = $this->pricing[$page];
        } catch (\Throwable $th) {
            abort(404);
        }

        return view('services', compact('data', 'pricing'));
    }
}
