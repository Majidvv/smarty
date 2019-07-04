<?php

add_action('init','propanel_of_options');

if (!function_exists('propanel_of_options')) {
function propanel_of_options(){

//Theme Shortname
$shortname = "smarty";

//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';


/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall




/* Option Page 1 - All Options */
	
/* logo  */ 
$options[] = array( "name" => __('لوگو','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('راهنما','framework_localize'),
			"desc" => "",
			"id" => $shortname."_sample_callout",
			"std" => "در این قسمت میتوانید لوگوی سایت را مدیریت کنید.",
			"type" => "info");

$options[] = array( "name" => __('تصویر لوگو','framework_localize'),
			"desc" => __('شما میتوانید تصویر لوگوی مورد نظر خودتان را در این قسمت آپلود کنید','framework_localize'),
			"id" => $shortname."_site_logo",
			"std" => "",
			"type" => "upload");			
	
	/* end logo */	
	
	/* Load logo  */ 
$options[] = array( "name" => __('Load Logo','framework_localize'),
"type" => "heading");


$options[] = array( "name" => __(' Load Logo','framework_localize'),
"desc" => __('شما میتوانید تصویر لوگوی لودینگ مورد نظر خودتان را در این قسمت آپلود کنید','framework_localize'),
"id" => $shortname."_load_logo",
"std" => "",
"type" => "upload");			

/* end Load logo */


   /*  titr2 */
$options[] = array( "name" => __('Titr2','framework_localize'),
			"type" => "heading");


$options[] = array( "name" => __('شعار سایت','framework_localize'),
			"desc" => "در این قسمت میتوانید شعار سایت خود را وارد کنید",
			"id" => $shortname."_titr2",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('توضیح باکس جستجو','framework_localize'),
			"desc" => "در این قسمت میتوانید متن باکس جستجو را وارد کنید",
			"id" => $shortname."_search_box",
			"std" => "",
			"type" => "text");

								
$options[] = array( "name" => __('پس زمینه','framework_localize'),
			"desc" => __('تصویر پس زمینه بخش شعار سایت خود را در این قسمت وارد کنید','framework_localize'),
			"id" => $shortname."_back",
			"std" => "",
			"type" => "upload");

/* end titr2 */





/*  about */

$options[] = array( "name" => __('Aboute','framework_localize'),
			"type" => "heading");


$options[] = array( "name" => __('عنوان','framework_localize'),
			"desc" => "عنوان بخش درباره ما",
			"id" => $shortname."_title_aboute",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('متن','framework_localize'),
			"desc" => "متن توضیحی بخش درباره ما",
			"id" => $shortname."_content_aboute",
			"std" => "",
			"type" => "textarea");			

$options[] = array( "name" => __('تصویر ','framework_localize'),
			"desc" => __('تصویر بخش درباره ما را اینجا وارد کنید','framework_localize'),
			"id" => $shortname."_img_aboute",
			"std" => "",
			"type" => "upload");

/* end about */

   /** social network */
   $options[] = array ("name" => __ ('Social Networks','framework_localize'),
   "type" =>"heading");

		$options[] =array("name" => __('FaceBook','framework_localize'),
		"desc" =>"آدرس صفحه فیس بوک خود را وارد کنید",
		"id" => "smarty_social",
		"std" =>"",
		"type" => "text"
		);
		$options[] = array ("name" => __ ('Twitter','framework_localize'),
		"desc" =>"آدرس تویتر خود را وارد کنید",
		"id" => "_twitter",
		"std"=>"",
		"type"=>"text"
	    );
		$options[] = array ("name" => __ ('Instagram','framework_localize'),
		"desc" =>"آدرس اینستاگرام خود را وارد کنید",
		"id" =>"_instagram",
		"std"=>"",
		"type"=>"text"
		);
		// $options[] = array ("name" => __ ('Telegram','framework_localize'),
		// "desc" =>"آدرس تلگرام خود را وارد کنید",
		// "id" =>$shortname."_telegram",
		// "std"=>"",
		// "type"=>"text"
		// );
		// $options[] = array ("name" => __ ('Linkedin','framework_localize'),
		// "desc" =>"آدرس لینکدین خود را وارد کنید",
		// "id" =>$shortname."_linkedin",
		// "std"=>"",
		// "type"=>"text"
		// );
/** end social network */

/** customize slider */

             /** Heading Slider */
				$options[] = array("name" => __ ('Slider','framework_localize'),
				"type" => "heading"
					);
			 /** End Heading Slider */
			  /** Upload Image1 */
					$options[] =array ("name" => __('image1','framework_localize'),
					"desc" => __ ('inter the 1 picture'),
					"id" =>"smarty_1_picture",
					"type"=>"upload"
						);
				/** End Upload Image1 */
				/** Title 1 For Slider */

						$options[] =array ("name" => __('title1','framework_localize'),
					"desc" => __ ('inter the 1 title'),
					"id" =>"smarty_1_title",
					"type"=>"text"
						);

				 /** End Title 1 For Slider */
				 /** Subtitle 1 for slider */
				 $options[] =array ("name" => __('subtitle1','framework_localize'),
					"desc" => __ ('inter the 1 title'),
					"id" =>"smarty_1_subtitle",
					"type"=>"text"
						);
				  /** End Subtitle 1 for slider */
				 
				 /** Upload Image 2 */
						$options[] =array ("name" => __('image2','framework_localize'),
					"desc" => __ ('inter the 2 picture'),
					"id" =>"smarty_2_picture",
					"type"=>"upload"
						);
				/** End Upload Image 2 */
				/** Title 2 For Slider */

				$options[] =array ("name" => __('title2','framework_localize'),
				"desc" => __ ('inter the 2 title'),
				"id" =>"smarty_2_title",
				"type"=>"text"
					);

			 /** End Title 2 For Slider */
			 /** Subtitle 2a for slider */
			 $options[] =array ("name" => __('subtitle2','framework_localize'),
				"desc" => __ ('inter the 2 title'),
				"id" =>"smarty_2_subtitle",
				"type"=>"text"
					);
			  /** End Subtitle 2a for slider */
			   /** Subtitle 2b for slider */
			 $options[] =array ("name" => __('subtitle2b','framework_localize'),
			 "desc" => __ ('inter the 2b title'),
			 "id" =>"smarty_2b_subtitle",
			 "type"=>"text"
				 );
		   /** End Subtitle 2b for slider */
            /** picture 3 for slider */
		$options[] =array ("name" => __('image3','framework_localize'),
	"desc" => __ ('inter the 3 picture'),
	"id" =>"smarty_3_picture",
	"type"=>"upload"
		);
		 /** end picture 3 for slider */
		  /** title 3 for slider */
		  $options[] =array ("name" => __('title3','framework_localize'),
		  "desc" => __ ('inter the 3 title'),
		  "id" =>"smarty_3_title",
		  "type"=>"text"
			  );
		/** End title 3 for slider */
		 /** subtitle 3 for slider */
		 $options[] =array ("name" => __('subtitle3','framework_localize'),
		 "desc" => __ ('inter the 3 subtitle'),
		 "id" =>"smarty_3_subtitle",
		 "type"=>"text"
			 );
	   /** End subtitle 3 for slider */
	   /**picture 4 for slider */
		$options[] =array ("name" => __('image4','framework_localize'),
	"desc" => __ ('inter the 4 picture'),
	"id" =>"smarty_4_picture",
	"type"=>"upload"
		);
		/** end picture 4 for slider */
		/**title 4 for slider  */
		$options[] =array("name" => __('title4','framework_localize'),
		"desc" => __('inter the 4 title'),
		"id"=>"smarty_4_title",
		"type" =>"text"
	);
		/** end title 4 for slider */
		/**title 4b for slider  */
		$options[] =array("name" => __('title4b','framework_localize'),
		"desc" => __('inter the 4b title'),
		"id"=>"smarty_4b_title",
		"type" =>"text"
	);
		/** end title 4b for slider */
		/**subtitle 4 for slider */
		$options[] = array("name" => __('subtitle4','framework_localize'),
		"desc" => __('inter the 4 subtitle'),
		"id"=>"smarty_4_subtitle",
		"type" =>"text"
	    );
		/** end subtitle 4 for slider */
		/** picture 5 for slider */
		$options[] =array ("name" => __('image5','framework_localize'),
	"desc" => __ ('inter the 5 picture'),
	"id" =>"smarty_5_picture",
	"type"=>"upload"
		);
		/**end picture 5 for slider */
		/**title 5 for slider  */
		$options[] =array("name" => __('title5','framework_localize'),
		"desc" => __('inter the 5 title'),
		"id"=>"smarty_5_title",
		"type" =>"text"
	);
		/** end title 5 for slider */
			/**subtitle 5 for slider  */
			$options[] =array("name" => __('subtitle5','framework_localize'),
			"desc" => __('inter the 5 subtitle'),
			"id"=>"smarty_5_subtitle",
			"type" =>"text"
		);
			/** end subtitle 5 for slider */
			/** picture 6 for slider */
		$options[] =array ("name" => __('image6','framework_localize'),
	"desc" => __ ('inter the 6 picture'),
	"id" =>"smarty_6_picture",
	"type"=>"upload"
		);
		/** end picture 6 for slider */
		/**title 6 for slider  */
		$options[] =array("name" => __('title6','framework_localize'),
		"desc" => __('inter the 6 title'),
		"id"=>"smarty_6_title",
		"type" =>"text"
		);
		/** end title 6 for slider */
		/**subtitle 6 for slider  */
		$options[] =array("name" => __('subtitle6','framework_localize'),
		"desc" => __('inter the 6 subtitle'),
		"id"=>"smarty_6_subtitle",
		"type" =>"text"
		);
		/** end subtitle 6 for slider */
		/**subtitle 6b for slider  */
		$options[] =array("name" => __('subtitle6b','framework_localize'),
		"desc" => __('inter the 6b subtitle'),
		"id"=>"smarty_6b_subtitle",
		"type" =>"text"
		);
		/** end subtitle 6b for slider */
        /** picture 7 for slider */
		$options[] =array ("name" => __('image7','framework_localize'),
	"desc" => __ ('inter the 7 picture'),
	"id" =>"smarty_7_picture",
	"type"=>"upload"
		);
		/** end picture 7 for slider */
		/**title 7 for slider  */
		$options[] =array("name" => __('title7','framework_localize'),
		"desc" => __('inter the 7 title'),
		"id"=>"smarty_7_title",
		"type" =>"text"
		);
		/** end title 7 for slider */
		/**subtitle 7 for slider  */
		$options[] =array("name" => __('subtitle7','framework_localize'),
		"desc" => __('inter the 7 subtitle'),
		"id"=>"smarty_7_subtitle",
		"type" =>"text"
		);
		/** end subtitle 7 for slider */
		/**picture 8 for slider */
		$options[] =array ("name" => __('image8','framework_localize'),
	"desc" => __ ('inter the 8 picture'),
	"id" =>"smarty_8_picture",
	"type"=>"upload"
		);
		/** end picture 8 for slider */
		/**title 8 for slider  */
		$options[] =array("name" => __('title8','framework_localize'),
		"desc" => __('inter the 8 title'),
		"id"=>"smarty_8_title",
		"type" =>"text"
		);
		/** end title 8 for slider */
		/**subtitle 8 for slider  */
		$options[] =array("name" => __('subtitle8','framework_localize'),
		"desc" => __('inter the 8 subtitle'),
		"id"=>"smarty_8_subtitle",
		"type" =>"text"
		);
		/** end subtitle 8 for slider */
/** end customize slider*/

update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>