<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $quotes = [
            "The only bad workout is the one that didn't happen.",
            "Don't wish for a good body, work for it.",
            "The only place where success comes before work is in the dictionary.",
            "Your body can stand almost anything. It's your mind that you have to convince.",
            "The only way to do great work is to love what you do.",
            "The only limits that exist are the ones you place on yourself.",
            "Success isn’t given, it’s earned. On the track, on the field, in the gym. With blood, sweat, and the occasional tear.",
            "The pain you feel today will be the strength you feel tomorrow.",
            "If it doesn't challenge you, it won't change you.",
            "The difference between try and triumph is a little umph.",
            "Your body is a reflection of your lifestyle.",
            "You are stronger than you think.",
            "Don't stop when you're tired. Stop when you're done.",
            "Exercise is king. Nutrition is queen. Put them together and you've got a kingdom.",
            "The only easy day was yesterday.",
            "Fitness is like a relationship. You can't cheat and expect it to work.",
            "Train insane or remain the same.",
            "The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.",
            "Success starts with self-discipline.",
            "The pain you feel today will be the strength you feel tomorrow.",
            "Sweat is fat crying.",
            "Strive for progress, not perfection.",
            "The only bad workout is the one that didn't happen.",
            "Strength does not come from physical capacity. It comes from an indomitable will.",
            "The clock is ticking. Are you becoming the person you want to be?",
            "The body achieves what the mind believes.",
            "Your body hears everything your mind says. Stay positive!",
            "I don't count my sit-ups. I only start counting when it starts hurting because they’re the only ones that count.",
            "The only bad workout is the one you didn't do.",
            "Make every rep count.",
            "The pain you feel today will be the strength you feel tomorrow.",
            "When you feel like quitting, think about why you started.",
            "Don’t stop until you're proud.",
            "Success is what comes after you stop making excuses.",
            "A one-hour workout is 4% of your day. No excuses.",
            "You miss 100% of the shots you don’t take.",
            "The only way to finish is to start.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
        ];

        foreach ($quotes as $quote) {
            Quote::create(['name' => $quote]);
        }
    }
}
