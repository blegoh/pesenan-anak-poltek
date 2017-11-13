<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Sejarah', 'Geografi', 'Penduduk', 'Pendidikan',
            'Etiologi','Epidemiologi','Patofisiologi','Pencegahan dan Pemeriksaan',
        ];

        foreach ($titles as $title) {
            \App\Models\Page::create([
                'slug' => str_slug($title),
                'title' => $title,
                'image' => '',
                'content' => "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend finibus leo eu bibendum. Donec eu interdum libero. Sed euismod velit magna, vitae suscipit justo maximus eget. Integer vel fringilla eros. Ut in risus ipsum. Pellentesque pharetra rhoncus lacinia. Fusce elementum, nisl id tempus pretium, ligula nibh accumsan leo, in finibus lacus nisl vel felis.

In hac habitasse platea dictumst. Aliquam erat volutpat. Nam vel eros tincidunt, malesuada erat ut, feugiat eros. Nullam sit amet tristique lorem. Donec maximus tristique libero nec feugiat. Vestibulum ac arcu vitae erat dapibus accumsan. Morbi blandit orci id eros tincidunt aliquam. Maecenas et est porttitor, interdum quam eget, gravida nisl. Curabitur vehicula laoreet ultrices. Aliquam sed vehicula massa. Duis semper sagittis mauris tempus bibendum. Mauris at malesuada enim. Ut mi mi, iaculis scelerisque fermentum vitae, commodo et purus. Pellentesque id nibh mattis, consectetur lacus nec, pretium odio. Aenean eu imperdiet dui. Sed molestie lectus nec placerat auctor.

In suscipit neque ut massa volutpat fermentum. Sed vulputate quis nisl in fringilla. Nulla posuere efficitur risus sed dapibus. Sed eget finibus metus. Sed fringilla et turpis vel posuere. Pellentesque convallis purus arcu, id molestie libero luctus ac. Ut ac convallis tortor. Vivamus eget est ullamcorper, viverra leo id, tincidunt nisi. Morbi imperdiet ultricies vestibulum.

Integer at molestie dolor. Fusce sed odio purus. Sed eget gravida augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi ultricies est vitae rhoncus rutrum. Aenean semper, arcu non elementum tempor, justo metus iaculis ex, nec sollicitudin massa mauris id leo. Phasellus imperdiet ligula vel sagittis dignissim. Aliquam pulvinar tempor erat, non gravida elit mollis vitae. In sagittis risus justo. Nam sagittis porta ante. Praesent vitae vestibulum sem.

Curabitur a nisl sit amet augue rhoncus dictum. Nulla justo odio, rhoncus eu dignissim eu, tincidunt ac orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vestibulum, nunc at commodo sollicitudin, ex velit malesuada quam, id suscipit ipsum ligula in felis. In nec nisi diam. In sit amet nulla commodo ante congue pellentesque scelerisque eget lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nunc dui, ultrices eu commodo pellentesque, ornare sit amet nulla. Integer convallis consectetur suscipit. Cras lobortis tempor massa vel tristique. Etiam faucibus nunc eget turpis fringilla volutpat. Vivamus pellentesque, nibh eget maximus sollicitudin, mi eros placerat turpis, in dapibus quam turpis ac justo. ",
            ]);
        }
    }
}
