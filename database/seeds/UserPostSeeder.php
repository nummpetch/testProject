<?php

use Illuminate\Database\Seeder;
//Faker\Provider\Lorem
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
class UserPostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create();
        //DB::table('users')->delete();
        $numUser=50;
        $numUserPost=3;
        $numCommentPost=20;
        $user=new User();
        for ($i=0; $i < $numUser; $i++) {
            $generate_name = $faker->name;
            $generate_password = $faker->password;

            $user=new User();
            $user->username =$generate_name;
            $user->display_name =$generate_name;
            $user->password = bcrypt('123456');
            $user->save();
            

            //Auth::attempt(['username' => $generate_name, 'password' => bcrypt($faker->password)]);
            //** */User create Posts
            for($j=0; $j<$numUserPost; $j++){
                $post=new Post();
                $post->user_id = $user->id;    
                $post->title =$faker->sentence;
                $post->body =$faker->text($maxNbChars = 200);
                //return $post;
                $post->save();
            }
            //** */User comment post
            //$postId=rand(1,$numUser*$numUserPost);
            for($j=0; $j<$numCommentPost; $j++){
                $postId=rand(1,$numUser*$numUserPost);
                $comment=new Comment();
                $comment->user_id = $user->id;
                $comment->post_id = $postId;
                $comment->message = $post->title =$faker->sentence;
                $comment->save();
            }
        }                   
    }
}
