<?php

namespace Tests\Brunty\Faker;

use Brunty\Faker\BuzzwordJobProvider;
use Faker\Factory;
use PHPUnit_Framework_Assert as Assert;

class BuzzwordJobProviderTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_generates_a_three_word_job_title()
    {
        $jobTitle = BuzzwordJobProvider::jobTitle($extraTitle = true);

        $jobTitleWords = explode(' ', $jobTitle);
        Assert::assertCount(3, $jobTitleWords);
    }

    /** @test */
    public function it_can_be_added_to_faker_as_a_provider_and_used()
    {
        $faker = Factory::create();
        $faker->addProvider(new BuzzwordJobProvider($faker));

        $jobTitle = $faker->jobTitle();
        $jobTitleWords = explode(' ', $jobTitle);
        Assert::assertCount(3, $jobTitleWords);
    }
}