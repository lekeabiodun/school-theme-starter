<?php

use App\Theme;
use Illuminate\Support\Str;


if(!function_exists('theme_layout')){
	function theme_layout($theme_name, $layout='layout') {
		return "themes.$theme_name.$layout";
	}
}

if(!function_exists('theme_path')){
	function theme_path($content=''){
		$content = str_replace('/', DIRECTORY_SEPARATOR, $content);
		if(Str::startsWith($content, DIRECTORY_SEPARATOR)){
			return resource_path('views'.DIRECTORY_SEPARATOR.'themes'.$content);
		} else {
			return resource_path('views'.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.$content);
		}
	}
}

if(!function_exists('theme_asset')){
	function theme_asset($content=''){
		return asset('resources/views/themes/'.$content);
	}
}

if(!function_exists('theme_include')){
	function theme_include($file, $folder="inc") {
		$theme_name = env("THEME_NAME");
		return "themes.$theme_name.$folder.$file";
	}
}

if(!function_exists('theme_block')){
	function theme_block($block, $folder="blocks") {
		$theme_name = env("THEME_NAME");
		return "themes.$theme_name.$folder.$block";
	}
}

if(!function_exists('get_site')){
	function get_site($option) {
		if(isset(site_data()[$option])){
			return site_data()[$option];
		}
		return '';
	}
}


function site_data() {
	return [
		'slide1_image' => asset('storage/sliders/slide1.jpg'),
		'slide1_title' => 'Welcome to Little Ones',
		'slide1_subtitle' => 'Little Ones is a Super Fun Daycare / Children',
		'slide1_text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
		'slide1_action' => 'Start Now',
		'slide1_link' => 'home',
		'slide2_image' => asset('storage/sliders/slide2.jpg'),
		'slide2_title' => 'Best You can ever get',
		'slide2_subtitle' => 'Little Ones is a Super Fun Daycare / Children',
		'slide2_text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
		'slide2_action' => 'Learn More',
		'slide2_link' => 'home',
		'slide3_image' => asset('storage/sliders/slide3.jpg'),
		'slide3_title' => 'Knowledge is power',
		'slide3_subtitle' => 'Little Ones is a Super Fun Daycare / Children',
		'slide3_text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
		'slide3_action' => 'Start Now',
		'slide3_link' => 'home',

		'sliders' => collect([
			(object)[
				'image' => asset('storage/sliders/slide1.jpg'),
				'title' => 'Welcome to Little Ones',
				'subtitle' => 'Little Ones is a Super Fun Daycare / Children',
				'text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
				'action' => 'Start Now',
				'link' => url('home'),
			],
			(object)[
				'image' => asset('storage/sliders/slide2.jpg'),
				'title' => 'Best You can ever get',
				'subtitle' => 'Little Ones is a Super Fun Daycare / Children',
				'text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
				'action' => 'Learn More',
				'link' => url('about'),
			],
			(object)[
				'image' => asset('storage/sliders/slide3.jpg'),
				'title' => 'Knowledge is power',
				'subtitle' => 'Little Ones is a Super Fun Daycare / Children',
				'text' => "Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life. Knowledge is power.",
				'action' => 'Contact Us',
				'link' => url('contact'),
			]
		]),
		'menu' => collect([
			(object)[
				'name' => 'Home',
				'link' => url('home'),
			],
			(object)[
				'name' => 'About Us',
				'link' => url('about'),
			],
			(object)[
				'name' => 'Contact Us',
				'link' => url('contact'),
			]
		]),
		'social_links' => collect([
			(object)[
				'name' => 'facebook',
				'link' => 'https://www.facebook.com/littleones',
			],
			(object)[
				'name' => 'instagram',
				'link' => 'https://www.instagram.com/littleones',
			],
			(object)[
				'name' => 'twitter',
				'link' => 'https://www.twitter.com/littleones',
			]
		]),
		'logo' => asset('storage/favicon.ico'),
		'logo-light' => asset('storage/logo-light.png'),

		
		'news_title' => 'News Title',
		'news_subtitle' => 'News Subtitle',
		'staff_title' => 'Staff Title',
		'staff_subtitle' => 'Staff Subtitle',

		'working_time' => 'Monday - Friday, 08:00AM - 05:00 PM',
		'mobile' => '09087677787',
		'email' => 'admin@schoolmail.com',
		'address' => 'No 12, School Newland Elegushi',

		'footer_text' => 'It is our plan to produce students that will be able to compete with any other student from any part of the world.',
		
		'site_title' => 'Little Ones',
		'site_subtitle' => 'Let children creative and make a different',

		'about' => "It is our plan to produce students that will be able to compete with any other student from any part of the world. We are going to strive to produce students who will be able to measure up to international standard.The global economy today demands that students should be able to compete with their counterparts from any corner of the world.So, the use of the word 'International' in the name of the school implies that our students, when they graduate will be world class standard, or world class graduates. They will be able to pass JAMB examinations easily, in fact they will be able to pass any admission examination to any institution of higher learning. Talents are given to all children,but these talents are given in different fields or disciplines. Some are gifted academically; some are talented in performing arts; and some are talented athletics, etc. It is our plan to detect each child's talent, at an early age,and to start helping the child to develop his/her talent. NO CHILD WILL BE LEFT BEHIND. The buildings of a school do not tell the standard of the students from that school,but have meaningful engagement with that student,and the standard of the school he/she comes from will surface.If the standard of the school the student comes from is low, it will show immediately. The foundation of a child's education standard must be laid solidly and it must start from the early age of the child. This is why we plan help every child to start with a good standard so that each one of our students can stand tall among his/her counterparts from any part of the world.",
		'about_title' => 'High Quality Daycare',
		'about_subtitle' => 'Little Ones Daycare will provide a stimulating and safe environment for children ages three months to ten years. Run by an experienced former elementary school educator (John Doe).',
		'about_image' => asset('storage/site/about.jpg'),

		'history' => "We have a long history in bringing up talents because we believe all children are given, but these talents are given in different fields or disciplines. Some are gifted academically; some are talented in performing arts; and some are talented athletics, etc. It is our plan to detect each child's talent, at an early age,and to start helping the child to develop his/her talent. NO CHILD WILL BE LEFT BEHIND. The buildings of a school do not tell the standard of the students from that school,but have meaningful engagement with that student,and the standard of the school he/she comes from will surface.If the standard of the school the student comes from is low, it will show immediately. The foundation of a child's education standard must be laid solidly and it must start from the early age of the child. This is why we plan help every child to start with a good standard so that each one of our students can stand tall among his/her counterparts from any part of the world. A child must be well fed in order to make the child pay attention. Good  food doesn't mean quantity either. A child must be given nutritional diet in order for the child to develop mentally and physically. This is why we plan to offer DAILY HOT LUNCHES AND SNACKS at ABP. We are re-introducing the old subjects again, civic duties; our system of government;our major ethnic dialects that are slowly disappearing.Our students will be taken to see historic places;museums;palaces;government centers.They will see the Parliament Chambers where our laws are made. They will meet our elected officers,and even hold their own mock parliament. Only a healthy child can learn.We are proposing a Health Insurance Program in which all our students will be covered.The students can use the coverage on and off the school.",
		'history_title' => 'Our History',
		'history_subtitle' => 'Let children creative and make a different',
		'history_image' => asset('storage/site/history.jpg'),
		
		'statement_image' => asset('storage/site/statement.jpg'),
		'statement_bg' => asset('storage/site/statement_bg.jpg'),
		'statement_title' => 'Mission Statement',
		'statement_subtitle' => 'Get started with us to explore the exciting',

		'mission' => 'To nurture people of diverse background into profound character and academic distinction, through teaching, mentoring, best practices and fear of God, for the greatness of the country and global community.',
		'mission_title' => 'Mission',
		'mission_image' => asset('storage/site/mission.jpg'),
		'vision' => 'To be the foremost in promoting unity in diversity and nurturing globally, building up talent worthy in character and learning.',
		'vision_title' => 'Vision',
		'vision_image' => asset('storage/site/vision.jpg'),
		'community' => 'To nurture people of diverse background into profound character and academic distinction, through teaching, mentoring, best practices and fear of God, for the greatness of the country and global community.',
		'community_title' => 'Community',
		'community_image' => asset('storage/site/community.jpg'),

		'contact_title' => 'Contact Us',
		'contact_subtitle' => 'Send Us a Message',

		'news_title' => 'Recent News',
		'news_subtitle' => 'Get latest breaking news & top stories today',

		'news' => collect([
			(object)[
				'author' => (object)[
					'name' => 'Pemisire Tinubu',
				],
				'title' => 'The Best Nutrition Snacks',
				'body' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				'slug' => "the-best-nutrition-snacks",
				'image' => asset('storage/posts/blogprev1.jpg'),
				'created_at' => now()->addDays(-24)
			],
			(object)[
				'author' => (object)[
					'name' => 'Pemisire Tinubu',
				],
				'title' => 'Most popular kids rhymes',
				'body' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				'slug' => "the-best-nutrition-snacks",
				'image' => asset('storage/posts/blogprev2.jpg'),
				'created_at' => now()->addDays(-84)
			],
			(object)[
				'author' => (object)[
					'name' => 'Pemisire Tinubu',
				],
				'title' => 'Teach your kids these rules',
				'body' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				'slug' => "the-best-nutrition-snacks",
				'image' => asset('storage/posts/blogprev3.jpg'),
				'created_at' => now()->addDays(-98)
			],
			(object)[
				'author' => (object)[
					'name' => 'Pemisire Tinubu',
				],
				'title' => 'The Safest Toy for your Child',
				'body' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				'slug' => "the-best-nutrition-snacks",
				'image' => asset('storage/posts/blogprev4.jpg'),
				'created_at' => now()->addDays(-4)
			],
		]),
		'gallery1_image' => asset('storage/gallery/gallery1.jpg'),
		'gallery2_image' => asset('storage/gallery/gallery2.jpg'),
		'gallery3_image' => asset('storage/gallery/gallery3.jpg'),
		'gallery4_image' => asset('storage/gallery/gallery4.jpg'),
		'gallery5_image' => asset('storage/gallery/gallery5.jpg'),
		'gallery6_image' => asset('storage/gallery/gallery6.jpg'),
		'gallery7_image' => asset('storage/gallery/gallery7.jpg'),
		'gallery8_image' => asset('storage/gallery/gallery8.jpg'),

		'staff' => collect([
			(object)[
				'name' => 'Mr. Ademola Jimoh',
				'position' => 'Principal',
				'image' => asset('storage/staff/team2.jpg'),
			],
			(object)[
				'name' => 'Mrs. Mercy Akunyili',
				'position' => 'H.O.D.',
				'image' => asset('storage/staff/team1.jpg'),
			],
			(object)[
				'name' => 'Ms. Bola Ahmed',
				'position' => 'English Teacher',
				'image' => asset('storage/staff/team3.jpg'),
			],
			(object)[
				'name' => 'Mrs. Ajayi Bimbo',
				'position' => 'Biolgy Teacher',
				'image' => asset('storage/staff/team4.jpg'),
			],
			(object)[
				'name' => 'Mr. David Ayin',
				'position' => 'Math Teach',
				'image' => asset('storage/staff/team5.jpg'),
			],
		]),

		



	];
}
/*
	"news_title"
	"news_subtitle"
	"staff_title"
	"staff_subtitle"
	"history"
	"history_image"
	"statement_title"
	"statement_subtitle"
	"statement_image"
	"mission_title"
	"mission"
	"vision_title"
	"vision"
	"community_title"
	"community"
	"logo"
	"logo-light"
	"working_time_title"
	"address_title"
	"working_time"
	"address"
	"footer_text"
	"mobile"
	"email"
	"contact_title"
	"statement_bg"
	"menu_title"
	"about_title"
	"about_subtitle"
	"about"
	"about_image"
	"site_title"
	"site_subtitle"
	"theme_color"
	"gallery_1"
	"gallery_2"
	"gallery_3"
	"gallery_4"
	"gallery_5"
	"gallery_6"
	"gallery_7"
	"gallery_8"
	"history_title"
	"history_subtitle"
	"contact_subtitle"
	"gallery_title"
	"gallery_subtitle"
*/