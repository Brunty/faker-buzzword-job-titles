<?php

namespace Brunty\Faker;

use Faker\Provider\Base as BaseProvider;

class BuzzwordJobProvider extends BaseProvider
{

    /**
     * @var array
     */
    protected static $firstThings = [
        'Accomplished',
        'Alternative',
        'Annual',
        'Back-End',
        'Beta',
        'Bleeding Edge',
        'Blog',
        'Central',
        'Chief',
        'Client-Centric',
        'Cloud Based',
        'Competitive',
        'Consumer',
        'Converging',
        'Corporate',
        'Creative',
        'Cross-Media',
        'Customer',
        'Cutting Edge',
        'Daily',
        'Decisive',
        'Deputy',
        'Direct',
        'District',
        'Dynamic',
        'End User',
        'Executive',
        'Expert',
        'External',
        'Forward',
        'Front End',
        'Fulfilling',
        'Future',
        'Global',
        'Historical',
        'Holistic',
        'Human',
        'Hyperlocal',
        'Immersive',
        'In House',
        'Independent',
        'Industrial',
        'Industry Leading',
        'Innovative',
        'Inspirational',
        'Inter-Generational',
        'Internal',
        'International',
        'Interpersonal',
        'Investment',
        'Investor',
        'Junior',
        'Lead',
        'Leading',
        'Legacy',
        'Localized',
        'Location-Aware',
        'Marketplace',
        'Mission Critical',
        'Mobile',
        'Modern',
        'Monthly',
        'National',
        'Network',
        'Next Generation',
        'Nuanced',
        'Off Shore',
        'Official',
        'Offline',
        'Online',
        'Organic',
        'Primary',
        'Principle',
        'Private',
        'Proactive',
        'Product',
        'Professional',
        'Public',
        'Quarterly',
        'Real-Time',
        'Regional',
        'Revolutionary',
        'Rising',
        'Robust',
        'Seamless',
        'Seasonal',
        'Secondary',
        'Semi-Annunal',
        'Senior',
        'Shareholder',
        'Social',
        'Special',
        'Speculative',
        'Stock Exchange',
        'Streamlined',
        'Synergistic',
        'Systematic',
        'Technological',
        'Tertiary',
        'Theoretical',
        'Viral',
        'Weekly',
        'Wholesale',
        'Wireless'
    ];

    /**
     * @var array
     */
    protected static $secondThings = [
        'Accomplishment',
        'Accomplishments',
        'Accountability',
        'Accounts',
        'Algorithm',
        'Analytics',
        'Applications',
        'Appraisal',
        'Artistic',
        'Assurance',
        'Benchmark',
        'Benchmarking',
        'Beneficiary',
        'Benefits',
        'Big Data',
        'Blogging',
        'Brand',
        'Branding',
        'Business',
        'Buzzword',
        'Clickthrough',
        'Cloud',
        'Commentary',
        'Communications',
        'Competition',
        'Conduct',
        'Configuration',
        'Content Management',
        'Convergence',
        'Creativity',
        'Data',
        'Data Center',
        'Decisions',
        'Design',
        'Directives',
        'Diversity',
        'Division',
        'Empowerment',
        'Engine',
        'Enrollment',
        'Enterprise',
        'Evolutions',
        'Factors',
        'Framework',
        'Fufilment',
        'Functionality',
        'Globalization',
        'Group',
        'Hardware',
        'Identity',
        'Immersion',
        'Impact',
        'Implementation',
        'Incentives',
        'Independence',
        'Induction',
        'Industry',
        'Infrastructure',
        'Innovation',
        'Insight',
        'Inspiration',
        'Intake',
        'Integration',
        'Interactions',
        'Intranet',
        'Investor',
        'Leverage',
        'Logistics',
        'Marketing',
        'Marketplace',
        'Markets',
        'Metrics',
        'Milestone',
        'Mobility',
        'Modernization',
        'Module',
        'Networking',
        'Nuance',
        'Operations',
        'Optimization',
        'Output',
        'Overhead',
        'Paradigm',
        'Peer',
        'Portfolio',
        'Pricing',
        'Professionalism',
        'Program',
        'Project',
        'Public Relations',
        'Quality',
        'Reduction',
        'Relations',
        'Relay',
        'Release',
        'Renewal',
        'Report',
        'Research',
        'Resolution',
        'Response',
        'Return on Investment',
        'Revolutions',
        'Scalability',
        'Security',
        'Share Options',
        'Simplification',
        'Social Discovery',
        'Social Media',
        'Socializing',
        'Software',
        'Solutions',
        'Strategy',
        'Sustainability',
        'Synergy',
        'Systems',
        'Tactics',
        'Technology',
        'Theory',
        'Throughput',
        'Trend',
        'Usability',
        'Virtualization',
        'Visibility',
        'Web',
        'Wellness',
        'Workflow'
    ];

    /**
     * @var array
     */
    protected static $titles = [
        'Administrator',
        'Advisor',
        'Advocate',
        'Agent',
        'Aggregator',
        'Ambassador',
        'Analyst',
        'Appraiser',
        'Architect',
        'Assistant',
        'Associate',
        'Auditor',
        'Blogger',
        'Builder',
        'Chairman',
        'Chief',
        'Commentator',
        'Commissioner',
        'Communicator',
        'Compiler',
        'Consultant',
        'Coordinator',
        'Creator',
        'Deployer',
        'Designer',
        'Developer',
        'Director',
        'Discoverer',
        'Distributor',
        'Documenter',
        'Editor',
        'Emissary',
        'Engineer',
        'Enthusiast',
        'Evangelist',
        'Executive',
        'Expert',
        'Facilitator',
        'Foreman',
        'Guru',
        'Host',
        'Implementer',
        'Innovator',
        'Inspector',
        'Instructor',
        'Intern',
        'Interpreter',
        'Leader',
        'Liason',
        'Maintainer',
        'Manager',
        'Marketer',
        'Mentor',
        'Modernizer',
        'Motivator',
        'Networker',
        'Ninja',
        'Officer',
        'Operator',
        'Orchestrator',
        'Organizer',
        'Overseer',
        'Planner',
        'Producer',
        'Professional',
        'Promoter',
        'Recorder',
        'Reporter',
        'Representative',
        'Representitive',
        'Researcher',
        'Reviewer',
        'Revolutionary',
        'Rockstar',
        'Scout',
        'Scouter',
        'Secretary',
        'Specialist',
        'Speculator',
        'Spokesman',
        'Strategist',
        'Superintendant',
        'Supervisor',
        'Supporter',
        'Technician',
        'Theorist',
        'Virtualizer',
        'Visionary',
        'Visualizer'
    ];

    /**
     * @return string
     */
    public static function jobTitle()
    {
        $firstThing = self::getFirstThing();
        $secondThing = self::getSecondThing();
        $title = self::getTitle();

        return sprintf('%s %s %s', $firstThing, $secondThing, $title);
    }

    /**
     * @return string
     */
    private static function getFirstThing()
    {
        return self::$firstThings[array_rand(self::$firstThings)];
    }

    /**
     * @return string
     */
    private static function getSecondThing()
    {
        return self::$secondThings[array_rand(self::$secondThings)];
    }

    /**
     * @return string
     */
    private static function getTitle()
    {
        return self::$titles[array_rand(self::$titles)];
    }
}
