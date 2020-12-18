<?php
require_once './db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';


R::setup(DB_STRING, DB_USER, DB_PASSWORD);


/* DROP TABLES */
R::exec("drop table if exists instrument_lecture");
R::exec("drop table if exists lecture");
R::exec("drop table if exists language");
R::exec("drop table if exists channel");
R::exec("drop table if exists instrument");
R::exec("drop table if exists type");
R::exec("drop table if exists technique");
R::exec("drop table if exists user");
R::exec("drop table if exists role");

/* ROLES */
// role 1
$adminRole = R::dispense('role');
$adminRole->name = 'ADMIN';
$adminRole_id = R::store($adminRole);

// role 2
$moderatorRole = R::dispense('role');
$moderatorRole->name = 'MODERATOR';
$moderatorRole_id = R::store($moderatorRole);

// role 3
$userRole = R::dispense('role');
$userRole->name = 'USER';
$userRole_id = R::store($userRole);

/* USERS */
// user 1
$user1 = R::dispense('user');
$user1->firstName = 'Iarah';
$user1->lastName = 'Almeida';
$user1->email = 'iarahgda@gmail.com';
$user1->passwordHash = password_hash('fhasdf90dasfbp4i12hpfas', PASSWORD_DEFAULT);
$user1->role = $adminRole;
$user1_id = R::store($user1);

// user 2
$user2 = R::dispense('user');
$user2->firstName = 'Paulo';
$user2->lastName = 'Borges';
$user2->email = 'pauloabm@gmail.com';
$user2->passwordHash = password_hash('fasud9-fuasdhnç14fass', PASSWORD_DEFAULT);
$user2->role = $moderatorRole;
$user2_id = R::store($user2);

// user 3
$user3 = R::dispense('user');
$user3->firstName = 'Nayara';
$user3->lastName = 'Thaiza';
$user3->email = 'nayaras@gmail.com';
$user3->passwordHash = password_hash('fyuasd09f7yuas9-h3412', PASSWORD_DEFAULT);
$user3->role = $adminRole;
$user3_id = R::store($user3);

// user 4
$user4 = R::dispense('user');
$user4->firstName = 'Hugo';
$user4->lastName = 'Alkimim';
$user4->email = 'hugoalkimim@gmail.com';
$user4->passwordHash = password_hash('fasdhhjpo1240-unasdd', PASSWORD_DEFAULT);
$user4->role = $userRole;
$user4_id = R::store($user4);

/* LANGUAGES */
// language 1
$language1 = R::dispense('language');
$language1->name = 'English';
R::store($language1);

// language 2
$language2 = R::dispense('language');
$language2->name = 'Portuguese';
R::store($language2);

/* CHANNELS */
// channel 1
$channel1 = R::dispense('channel');
$channel1->url = 'https://www.youtube.com/user/CifraClub';
$channel1->name = 'Cifra Club';
R::store($channel1);

// channel 2
$channel2 = R::dispense('channel');
$channel2->url = 'https://www.youtube.com/user/JustinSandercoe';
$channel2->name = 'Justin Guitar';
R::store($channel2);

// channel 3
$channel3 = R::dispense('channel');
$channel3->url = 'https://www.youtube.com/channel/UCjdxyPMmtiBLrmsM2Ok-AUg';
$channel3->name = 'Swift Lessons';
R::store($channel3);

/* LECTURES */
// lecture 1
$lecture1 = R::dispense('lecture');
$lecture1->url = 'https://www.youtube.com/embed/DgNRDocUEkw';
$lecture1->name = 'STAND BY ME - Oasis (aula completa) | Como tocar no violão';
$lecture1->language = $language2;
$lecture1->channel = $channel1;
R::store($lecture1);

// lecture 2
$lecture2 = R::dispense('lecture');
$lecture2->url = 'https://www.youtube.com/embed/44VV6D9jAqE';
$lecture2->name = 'COMO USAR O VIBRATO | Dica do Vinny';
$lecture2->language = $language2;
$lecture2->channel = $channel1;
R::store($lecture2);

// lecture 3
$lecture3 = R::dispense('lecture');
$lecture3->url = 'https://www.youtube.com/embed/ecPzu9sTKbo';
$lecture3->name = '3 Ways of Playing F Chord - Guitar Lesson - Guitar for Beginners Stage 6 [BC-161]';
$lecture3->language = $language1;
$lecture3->channel = $channel2;
R::store($lecture3);

// lecture 4
$lecture4 = R::dispense('lecture');
$lecture4->url = 'https://www.youtube.com/embed/Wp9X4XFIHR4';
$lecture4->name = 'Get Clearer Sounding Chords with This String Muting Technique | Guitar for Beginners';
$lecture4->language = $language1;
$lecture4->channel = $channel2;
R::store($lecture4);

// lecture 5
$lecture5 = R::dispense('lecture');
$lecture5->url = 'https://www.youtube.com/embed/AG0v-ZeBzJk';
$lecture5->name = 'How to Play "Silent Night" on Guitar | Easy Chord Melody Lesson';
$lecture5->language = $language1;
$lecture5->channel = $channel3;
R::store($lecture5);

// lecture 6
$lecture6 = R::dispense('lecture');
$lecture6->url = 'https://www.youtube.com/embed/40n2SUf9h2w';
$lecture6->name = 'How to Play C7 on Guitar - Open Position';
$lecture6->language = $language1;
$lecture6->channel = $channel3;
R::store($lecture6);

/* INSTRUMENTS */
// instrument 1
$instrument1 = R::dispense('instrument');
$instrument1->name = 'Electric Guitar';
R::store($instrument1);

// instrument 2
$instrument2 = R::dispense('instrument');
$instrument2->name = 'Acoustic Guitar';
R::store($instrument2);

/* LECTURE_INSTRUMENT */
$instrument1->sharedLectureList[] = $lecture1;
$instrument1->sharedLectureList[] = $lecture2;
$instrument1->sharedLectureList[] = $lecture3;
$instrument2->sharedLectureList[] = $lecture4;
$instrument2->sharedLectureList[] = $lecture5;
$instrument2->sharedLectureList[] = $lecture6;
R::storeAll([$instrument1, $instrument2]);

/* TYPES */
// type 1
$type1 = R::dispense('type');
$type1->name = 'Foundation';
R::store($type1);

// type 2
$type2 = R::dispense('type');
$type2->name = 'Play';
R::store($type2);

/* TECHNIQUES */
// technique 1
$technique1 = R::dispense('technique');
$technique1->name = 'Speed Picking';
R::store($technique1);

// technique 2
$technique2 = R::dispense('technique');
$technique2->name = 'Hammer On';
R::store($technique2);

// technique 3
$technique3 = R::dispense('technique');
$technique3->name = 'Pull Off';
R::store($technique3);

// technique 4
$technique4 = R::dispense('technique');
$technique4->name = 'Slide';
R::store($technique4);

// technique 5
$technique5 = R::dispense('technique');
$technique5->name = 'Vibrato';
R::store($technique5);

// technique 6
$technique6 = R::dispense('technique');
$technique6->name = 'Muting';
R::store($technique6);

R::close();