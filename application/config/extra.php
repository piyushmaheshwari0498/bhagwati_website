<?php

$config['role'] = array("1" => "ADMIN", "2" => "USER" , "3" => "RO" ,"4" => "SUPER ADMIN");

$config['job_status'] = array(
    "1" => "Fresher",
    "2" => "Experienced"
);

$config['valid'] = array(
    "1" => "YES",
    "2" => "NO"
);

$config['vaccination'] = array(
    "1" => "Fully Vaccinated",
    "2" => "Partially Vaccinated"
);

// $config['martial_status'] = array(
//     "1" => "SINGLE",
//     "2" => "MARRIED",
//     "3" => "SEPARATED",
//     "4" => "DIVORCED",
//     "5" => "WIDOWED"
// );

$config['martial_status'] = array(
    "1" => "SINGLE",
    "2" => "MARRIED"
);

$config['gender'] = array(
    "1" => "MALE",
    "2" => "FEMALE"
);

$config['duration'] = array(
    "1" => "3 months",
    "2" => "6 months",
    "3" => "9 months"
);

$config['degree'] = array(
    "SSC" => "SSC",
    "HSC" => "HSC",
    "B.E." => "B.E.",
    "B.Sc" => "B.Sc",
    "B.Com" => "B.Com",
    "B.A" => "B.A",
    "OTHER" => "OTHER"
);

$config['knowus'] = array(
    "1" => "Newspaper",
    "2" => "Mail",
    "3" => "Whatsapp",
    "4" => "Marine Magazine",
    "5" => "Through Friend",
    "6" => "Other",
    "7" => "NUSI",
    "8" => "LinkedIn",
    "9" => "Website",
    "10" =>"Marine Institute"
);

$config['pagination'] = array(
    'query_string_segment'  =>  'offset',
    'page_query_string'     =>  true,
    'total_rows'            =>  60,
    'per_page'              =>  10,
    'full_tag_open'         => '<div class="pagging text-center float-right mr-2"><nav><ul class="pagination pull-right">',
    'full_tag_close'        => '</ul></nav></div>',
    'num_tag_open'          => '<li class="page-item">',
    'num_tag_close'         => '</li>',
    'cur_tag_open'          => '<li class="page-item active"><span class="page-link">',
    'cur_tag_close'         => '<span class="sr-only">(current)</span></span></li>',
    'next_tag_open'         => '<li class="page-item">',
    'next_tagl_close'       => '<span aria-hidden="true">&raquo;</span></li>',
    'prev_tag_open'         => '<li class="page-item">',
    'prev_tagl_close'       => '</li>',
    'first_tag_open'        => '<li class="page-item">',
    'first_tagl_close'      => '</li>',
    'last_tag_open'         => '<li class="page-item">',
    'last_tagl_close'       => '</li>',
    'attributes'            => array('class' => 'page-link')
  );


$config['pagination2'] = array(
    'query_string_segment'  =>  'offset',
    'page_query_string'     =>  true,
    'total_rows'            =>  60,
    'per_page'              =>  6,
    'full_tag_open'         => '<div class="pagging text-center mr-2"><nav><ul class="pagination ">',
    'full_tag_close'        => '</ul></nav></div>',
    'num_tag_open'          => '<li class="page-item">',
    'num_tag_close'         => '</li>',
    'cur_tag_open'          => '<li class="page-item active"><span class="page-link">',
    'cur_tag_close'         => '<span class="sr-only">(current)</span></span></li>',
    'next_tag_open'         => '<li class="page-item">',
    'next_tagl_close'       => '<span aria-hidden="true">&raquo;</span></li>',
    'prev_tag_open'         => '<li class="page-item">',
    'prev_tagl_close'       => '</li>',
    'first_tag_open'        => '<li class="page-item">',
    'first_tagl_close'      => '</li>',
    'last_tag_open'         => '<li class="page-item">',
    'last_tagl_close'       => '</li>',
    'attributes'            => array('class' => 'page-link')
  );

?>