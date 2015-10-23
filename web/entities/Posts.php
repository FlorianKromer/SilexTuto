<?php

namespace Entities;
use Doctrine\ORM\Mapping as ORM;

use Illuminate\Database\Eloquent\Model;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */

class Posts extends Model

{
  protected $table = 'posts';

  protected $fillable = [
    'title', 
    'author',
    'date',
    'content'
  ];

  protected $casts = [
    'title'  => 'string',
    'author' => 'string',
    'date' =>'string',
    'content' =>  'string'

  ];

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */

  public $id;


  /**
   * @ORM\Column(name="date", type="date")
   */

  public $date;


  /**
   * @ORM\Column(name="title", type="string", length=255)
   */

  public $title;


  /**
   * @ORM\Column(name="author", type="string", length=255)
   */

  public $author;


  /**
   * @ORM\Column(name="content", type="text")
   */

  public $content;




}