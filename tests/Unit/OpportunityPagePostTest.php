<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OpportunityPagePostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateOpportunityPagePost()
    {
        $post = factory(\App\OpportunityPagePost::class)->create([
            'user_id' => 1,
            'title' => 'title test',
            'institution' => 'institution test',
            'category' => 'category test',
            'description' => 'description test',
            'requirement' => 'requirement test',
            'contact' => 'contact test',
            'location' => 'location test',
        ]);

        $this->assertNotNull($post);

        $this->assertEquals('title test', $post->title);
        $this->assertEquals('institution test', $post->institution);
        $this->assertEquals('category test', $post->category);
        $this->assertEquals('description test', $post->description);
        $this->assertEquals('requirement test', $post->requirement);
        $this->assertEquals('contact test', $post->contact);
        $this->assertEquals('location test', $post->location);
    }

    public function updateOpportunityPagePost() 
    {
        $updated = [
            'title' => 'title test updated',
            'institution' => 'institution test updated',
            'category' => 'category test updated',
            'description' => 'description test updated',
            'requirement' => 'requirement test updated',
            'contact' => 'contact test updated',
            'location' => 'location test updated'
        ];

        $this->assertTrue(\App\OpportunityPagePost::where('user_id',1)->first()->fill($updated)->save());
    }

    public function deleteOpportunityPagePost()
    {
        $this->assertEquals(1,\App\OpportunityPagePost::where('user_id',1)->delete());
    }
}
