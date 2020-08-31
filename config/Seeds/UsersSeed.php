<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'username' => 'pitocmsssss',
                'email' => 'demo123@admin.com',
                'password' => '$2y$10$kcprj5VbJlJgcJXx3U5SJuFLmnlk5kNJKrpScZ8HQO6H7O9WgEHpi',
                'image' => 'user-img/template.jpg',
                'status' => '0',
                'created' => '2020-04-01 07:14:22',
                'modified' => '2020-04-16 15:47:37',
            ],
            [
                'id' => '2',
                'username' => 'test232',
                'email' => 'test@test.com',
                'password' => '$2y$10$jQaO3/f3tpSjbpduPmZ59O99knmqxB8TtQzlfYPfc11AV7Cq/K5S.',
                'image' => 'user-img/8709387_orig.jpg',
                'status' => '1',
                'created' => '2020-04-01 07:14:42',
                'modified' => '2020-04-12 13:41:24',
            ],
            [
                'id' => '3',
                'username' => 'pitocms',
                'email' => 'pitocms@yahoo.com',
                'password' => '$2y$10$yIXWSpsXIOeFoqomVHaggesm6rpUDFVTv2375uSHRKLQJVuUgf7X.',
                'image' => 'user-img/p120274.jpg',
                'status' => '1',
                'created' => '2020-04-03 15:15:44',
                'modified' => '2020-04-12 13:41:34',
            ],
            [
                'id' => '6',
                'username' => 'jone',
                'email' => 'jone@test.com',
                'password' => '$2y$10$VYFJspmwfYxKJdxXNLt3q.6AE/y6lDgb/ToErsQgd5qOKNcxOFKOm',
                'image' => 'user-img/8709387_orig.jpg',
                'status' => '1',
                'created' => '2020-04-10 07:35:31',
                'modified' => '2020-04-16 15:47:00',
            ],
            [
                'id' => '12',
                'username' => 'mitt',
                'email' => 'mitt@hotmail.com',
                'password' => '$2y$10$gNP5QKHMBkiDbvVgD0Ug8ee5Z8Yux0qDujo79znYLzJ1XZw26vx4W',
                'image' => '121212',
                'status' => '1',
                'created' => '2020-08-26 23:16:55',
                'modified' => '2020-08-26 23:16:55',
            ],
            [
                'id' => '13',
                'username' => 'kokurabr',
                'email' => 'kokurabr@hotmail.com',
                'password' => '$2y$10$KNi0SbQGbDhp.Hp2Srqx3uDiTr/KmOpF3ojEojkPYV/SptVDmlcui',
                'image' => 'user-img/danone-logo.png',
                'status' => '1',
                'created' => '2020-08-27 21:07:54',
                'modified' => '2020-08-28 19:43:05',
            ],
            [
                'id' => '20',
                'username' => 'jon',
                'email' => 'jon@hotmail.com',
                'password' => '$2y$10$oBEqgRhpjTONrFSEiIYalOIyCc9UWrhfyXWVRC6ITJuYLc66vgUpe',
                'image' => 'user-img/logo-principal-largo.png',
                'status' => '1',
                'created' => '2020-08-28 20:02:28',
                'modified' => '2020-08-28 20:02:28',
            ],
            [
                'id' => '21',
                'username' => 'jone2',
                'email' => 'jone@hotmail.com',
                'password' => '$2y$10$bDlRAwOI9OvYGSetOyX75uOHf25MRSsvJTq6pWXEI0xs.Ov6/8QiO',
                'image' => 'user-img/logo.png',
                'status' => '1',
                'created' => '2020-08-28 20:40:52',
                'modified' => '2020-08-28 20:40:52',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
