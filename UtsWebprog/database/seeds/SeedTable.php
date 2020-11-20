<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            [
                'name'=>'Drama'
            ],[
                'name'=>'Kids'
            ],[
                'name'=>'TV show'
            ]
        ]);

        DB::table('movies')->insert([
            [
               'genre_id'=>'1',
               'title'=>'Reply1988',
               'photo'=>'../stok/reply1988.jpg',
               'description'=>'In 1988, Duk-Sun (Hyeri), Jung-Hwan (Ryoo Joon-Yeol), Sun-Woo (Ko Gyung-Pyo) and Dong-Ryong (Lee Dong-Hwi) are high school students and Taek (Park Bo-Gum) is a go player. These five people have been friends since they were little kids. They all grew up together and are neighbors to this day. Their families are also very close to each other. They always hang around Taeks room and spend time together',
               'rating'=>'10/10'
            
            ],[
               'genre_id'=>'1',
               'title'=>'My Love From The Star',
               'photo'=>'../stok/mylove.jpg',
               'description'=>'An alien who has been stranded on Earth for more than 400 years is almost able to return home, but finds himself developing feelings for a famous actress.',
               'rating'=>'9/10'
            ],[
                'genre_id'=>'1',
                'title'=>'Hotel Del Luna',
                'photo'=>'../stok/hotel.jpg',
                'description'=>'Located in the middle of Seoul, Hotel del Luna is the eponymous hotel that caters only to ghosts; the beautiful but ill-tempered CEO is cursed to manage the hotel due to a terrible crime she committed, but cannot remember.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'1',
                'title'=>'its okay to be noy okay',
                'photo'=>'../stok/itsokay.jpg',
                'description'=>'A road to emotional healing opens up for an antisocial childrens book author and an employee in a psychiatric hospital.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'2',
                'title'=>'Ben 10',
                'photo'=>'../stok/ben10.jpg',
                'description'=>'Ben Tennyson, a 10-year-old boy, discovers a magical device that can turn him into 10 different alien heroes, each with its own unique abilities. With this newfound power, Ben, Grandpa Max and cousin Gwen help others and stop evildoers - but that doesnt mean he doesnt cause some superpowered kid mischief once and a while.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'2',
                'title'=>'Rugrats',
                'photo'=>'../stok/rugrats.jpg',
                'description'=>'Rugrats reveals the world from a babys point of view. Everything looks bigger, more mysterious and uncontrollable. Angelica, the oldest, likes to terrorise her cousin, Tommy, and his friends, and is famous for screaming, "You stupid babies!" The adults in the series are often clueless.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'2',
                'title'=>'Jimmy Neutron',
                'photo'=>'../stok/jimmy.jpg',
                'description'=>'Jimmy is a fifth grade genius always inventing some new gadget to solve some new problem. With his robotic dog Goddard always ready to lend advice, and his best friends Carl and Sheen, Jimmy tries to attend Lindberg Elementary like any other kid. And like any other kid, Jimmy often finds himself in a bit of fun mischief.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'2',
                'title'=>'South Park',
                'photo'=>'../stok/south.jpg',
                'description'=>'The animated series is not for children. In fact, its goal seems to be to offend as many as possible as it presents the adventures of Stan, Kyle, Kenny and Cartman. The show has taken on Saddam Hussein, Osama bin Laden, politicians of every stripe and self-important celebrities. Oh, and Kenny is killed in many episodes.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'3',
                'title'=>'The Office',
                'photo'=>'../stok/office.jpg',
                'description'=>'This US adaptation, set at a paper company in Scranton, Pa., has a similar documentary style to that of the Ricky Gervais-led British original. It features the staff of Dunder-Mifflin, a staff that includes characters based on characters from the British show (and, quite possibly, people you work with in your office). Theres Jim, the likable employee whos a bit of an everyman. Jim has a thing for receptionist-turned-sales rep Pam (because office romances are always a good idea). Theres also Dwight, the successful co-worker who lacks social skills and common sense. And theres Ryan, who has held many jobs at the company.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'3',
                'title'=>'Last Man On Earth',
                'photo'=>'../stok/last.jpg',
                'description'=>'In 2022, a cataclysm strikes Earth, seemingly wiping out the population save for former family man and bank employee Phil Miller. Sad and very lonely, Phil travels the United States, Canada and Mexico in his RV searching for other survivors. Striving to hold onto hope that there is at least one other living person, he tries to make the best of circumstances until his path finally crosses with that hoped-for other survivor -- and all becomes more comforting that the person happens to be a woman. As more survivors turn up, complications arise and Phil finds it difficult to co-exist with others again.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'3',
                'title'=>'Stranger Thing',
                'photo'=>'../stok/ST.jpg',
                'description'=>'Its the fall of 1984, about a year after Will Byers was found, and he has been plagued by seeing visions of the Upside Down featuring a more dangerous monster. That leads the boy to see a suspiciously friendly new doctor, with the possibility that Wills visions are the result of suffering from PTSD. Nancy deals with survivors remorse over the death of best friend Barb. Meanwhile, a new sinister entity threatens the Hawkins residents who survived the year-earlier events. New to the town is tomboy Max, who befriends the boys and attracts the romantic interests of Dustin and Lucas.',
                'rating'=>'10/10'
            ],[
                'genre_id'=>'3',
                'title'=>'The Witcher',
                'photo'=>'../stok/witcher.jpg',
                'description'=>'The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.',
                'rating'=>'10/10'
            ]
        ]);
        DB::table('episodes')->insert([
            [
                'movie_id'=>'1',
                'title'=>'doksun alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'1',
                'title'=>'doksun alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'1',
                'title'=>'doksun alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'1',
                'title'=>'doksun alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'1',
                'title'=>'doksun alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'2',
                'title'=>'alien alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'2',
                'title'=>'alien alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'2',
                'title'=>'alien alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'2',
                'title'=>'alien alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'2',
                'title'=>'alien alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'3',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'3',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'3',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'3',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'3',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'4',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'4',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'4',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'4',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'4',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'5',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'5',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'5',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'5',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'5',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'6',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'6',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'6',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'6',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'6',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'7',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'7',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'7',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'7',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'7',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'8',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'8',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'8',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'8',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'8',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'9',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'9',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'9',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'9',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'9',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'10',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'10',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'10',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'10',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'10',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'11',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'11',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'11',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'11',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'11',
                'title'=>'episode alive5',
                'episode'=>'5'
            ],[
                'movie_id'=>'12',
                'title'=>'episode alive',
                'episode'=>'1'
            ],[
                'movie_id'=>'12',
                'title'=>'episode alive2',
                'episode'=>'2'
            ],[
                'movie_id'=>'12',
                'title'=>'episode alive3',
                'episode'=>'3'
            ],[
                'movie_id'=>'12',
                'title'=>'episode alive4',
                'episode'=>'4'
            ],[
                'movie_id'=>'12',
                'title'=>'episode alive5',
                'episode'=>'5'
            ]
        ]);
    }
}
