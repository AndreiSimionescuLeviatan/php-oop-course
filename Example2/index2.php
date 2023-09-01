<?php

trait SharableTrait
{
    public function share()
    {
        echo self::class."Shared with ID". $this->id;
    }

}
class Post
{
    public $id=1;
    use SharableTrait;
}

class Photo
{
    public $id=1;
    use SharableTrait;
}

class Comment
{
    public $id=1;
    use SharableTrait;
}

$post=new Post();
$post->share().PHP_EOL;
$photo = new Photo();
$photo->share().PHP_EOL;
$comment = new Comment();
$comment->share().PHP_EOL;