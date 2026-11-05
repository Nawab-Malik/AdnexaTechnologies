<?php

/** Themed stock imagery (not portfolio) */
function service_stock_image(string $key): string
{
    $map = [
        'marketing' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80',
        'meta' => 'https://images.unsplash.com/photo-1611162616305-c69b3fa7fba5?auto=format&fit=crop&w=900&q=80',
        'google' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf4a?auto=format&fit=crop&w=900&q=80',
        'smm' => 'https://images.unsplash.com/photo-1611926653458-09294b3142bf?auto=format&fit=crop&w=900&q=80',
        'web' => 'https://images.unsplash.com/photo-1498050108023-c5249f127fff?auto=format&fit=crop&w=900&q=80',
        'mobile' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=900&q=80',
        'ecommerce' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=80',
        'design' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=900&q=80',
        'ai' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=900&q=80',
        'hosting' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=900&q=80',
        'course-basic' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80',
        'course-web' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=900&q=80',
        'course-meta' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=900&q=80',
        'course-google' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=900&q=80',
        'course-smm' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80',
        'course-youtube' => 'https://images.unsplash.com/photo-1611162616475-46b635cb6868?auto=format&fit=crop&w=900&q=80',
        'course-fb' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=900&q=80',
        'course-tiktok' => 'https://images.unsplash.com/photo-1611605698335-8b1569810432?auto=format&fit=crop&w=900&q=80',
        'course-ai' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=900&q=80',
        'course-prompt' => 'https://images.unsplash.com/photo-1682687220063-4742bd6fda47?auto=format&fit=crop&w=900&q=80',
        'about' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
    ];
    return $map[$key] ?? $map['marketing'];
}

function resolve_media_url(string $image): string
{
    if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
        return $image;
    }
    return img_url($image);
}

function all_services(): array
{
    return [
        ['id' => 'marketing', 'icon' => 'bi-graph-up-arrow', 'title' => 'Digital Marketing', 'desc' => 'Strategy, funnels, and paid media with reporting you can act on.', 'bullets' => ['Growth strategy & KPIs', 'Landing page alignment', 'Monthly performance reviews'], 'link' => 'services.php#marketing', 'image' => service_stock_image('marketing')],
        ['id' => 'meta', 'icon' => 'bi-megaphone', 'title' => 'Meta Ads Management', 'desc' => 'Facebook & Instagram campaigns built for leads, sales, and retargeting.', 'bullets' => ['Pixel & conversion API', 'Creative testing', 'Audience scaling'], 'link' => 'services.php#meta', 'image' => service_stock_image('meta')],
        ['id' => 'google', 'icon' => 'bi-search', 'title' => 'Google Ads & SEO', 'desc' => 'Search, Display, and YouTube ads plus on-page SEO foundations.', 'bullets' => ['Keyword research', 'Conversion tracking', 'Technical SEO basics'], 'link' => 'services.php#google', 'image' => service_stock_image('google')],
        ['id' => 'smm', 'icon' => 'bi-camera-reels', 'title' => 'Social Media Marketing', 'desc' => 'Content calendars, brand voice, and organic growth across platforms.', 'bullets' => ['Content & reels strategy', 'Community management', 'Analytics & reporting'], 'link' => 'services.php#smm', 'image' => service_stock_image('smm')],
        ['id' => 'web', 'icon' => 'bi-code-slash', 'title' => 'Web Development', 'desc' => 'Fast, responsive websites and dashboards with clean, maintainable code.', 'bullets' => ['HTML, CSS, JS, PHP', 'Bootstrap & APIs', 'SEO-ready structure'], 'link' => 'services.php#web', 'image' => service_stock_image('web')],
        ['id' => 'mobile', 'icon' => 'bi-phone', 'title' => 'Mobile App Development', 'desc' => 'Mobile-first experiences that match your brand and business goals.', 'bullets' => ['UI/UX for mobile', 'Cross-platform options', 'Launch checklist'], 'link' => 'services.php#mobile', 'image' => service_stock_image('mobile')],
        ['id' => 'ecommerce', 'icon' => 'bi-cart3', 'title' => 'E-Commerce Solutions', 'desc' => 'Stores that load fast, checkout smoothly, and integrate with your ads.', 'bullets' => ['Catalog & checkout', 'Payment gateways', 'Meta & Google tags'], 'link' => 'services.php#ecommerce', 'image' => service_stock_image('ecommerce')],
        ['id' => 'design', 'icon' => 'bi-palette', 'title' => 'UI/UX Design', 'desc' => 'Modern interfaces with your dark tech brand — wireframes to handoff.', 'bullets' => ['Figma prototypes', 'Design systems', 'Developer-ready assets'], 'link' => 'services.php#design', 'image' => service_stock_image('design')],
        ['id' => 'automation', 'icon' => 'bi-robot', 'title' => 'AI & Automation', 'desc' => 'Chatbots, workflows, and AI tools that save time and capture leads.', 'bullets' => ['WhatsApp & form bots', 'No-code automation', 'AI content pipelines'], 'link' => 'services.php#automation', 'image' => service_stock_image('ai')],
        ['id' => 'hosting', 'icon' => 'bi-cloud-check', 'title' => 'Hosting & Maintenance', 'desc' => 'Secure hosting, backups, updates, and peace of mind after launch.', 'bullets' => ['Uptime monitoring', 'Security patches', 'Content updates'], 'link' => 'contact.php#quote', 'image' => service_stock_image('hosting')],
    ];
}

function home_services(): array
{
    return all_services();
}

function home_course_highlights(): array
{
    return [
        ['icon' => 'bi-megaphone-fill', 'title' => 'Digital Marketing', 'note' => 'Meta, Google, SMM'],
        ['icon' => 'bi-code-slash', 'title' => 'Web Development', 'note' => 'HTML to full stack'],
        ['icon' => 'bi-robot', 'title' => 'AI & Automation', 'note' => 'Tools & workflows'],
    ];
}

function course_catalog(): array
{
    return [
        ['id' => 'basics', 'group' => 'Foundations', 'title' => 'Short Computer Courses', 'desc' => 'MS Office, typing, and everyday IT skills for beginners.', 'items' => ['MS Office suite', 'Basic IT & files', 'Typing & productivity', 'Email & internet'], 'image' => service_stock_image('course-basic')],
        ['id' => 'web', 'group' => 'Development', 'title' => 'Web Development', 'desc' => 'Build responsive sites and apps from HTML to full-stack projects.', 'items' => ['HTML, CSS, JavaScript', 'Bootstrap & PHP', 'React / Next.js intro', 'Portfolio projects'], 'image' => service_stock_image('course-web')],
        ['id' => 'meta-ads', 'group' => 'Digital Marketing', 'title' => 'Meta Ads', 'desc' => 'Run profitable Facebook & Instagram campaigns with confidence.', 'items' => ['Business Manager setup', 'Pixel & audiences', 'Creative testing', 'Scaling winners'], 'image' => service_stock_image('course-meta')],
        ['id' => 'google-ads', 'group' => 'Digital Marketing', 'title' => 'Google Ads', 'desc' => 'Search, Display, and YouTube ads with proper tracking.', 'items' => ['Search campaigns', 'YouTube & Display', 'Keywords & bidding', 'Conversion tracking'], 'image' => service_stock_image('course-google')],
        ['id' => 'smm', 'group' => 'Digital Marketing', 'title' => 'Social Media Marketing', 'desc' => 'Grow brands organically with content and community.', 'items' => ['Content strategy', 'Page management', 'Reels & posts', 'Analytics'], 'image' => service_stock_image('course-smm')],
        ['id' => 'youtube', 'group' => 'Automation & AI', 'title' => 'YouTube Automation', 'desc' => 'Research, produce, and rank content for monetization.', 'items' => ['Niche research', 'Script to publish', 'SEO & thumbnails', 'Monetization'], 'image' => service_stock_image('course-youtube')],
        ['id' => 'facebook-auto', 'group' => 'Automation & AI', 'title' => 'Facebook Automation', 'desc' => 'Automate posting, leads, and funnels for pages.', 'items' => ['Scheduled posting', 'Lead ads', 'Funnels', 'CRM handoff'], 'image' => service_stock_image('course-fb')],
        ['id' => 'tiktok', 'group' => 'Automation & AI', 'title' => 'TikTok (International)', 'desc' => 'International niches, growth, and RPM-focused strategy.', 'items' => ['Niche selection', 'Content formats', 'Analytics', 'Monetization'], 'image' => service_stock_image('course-tiktok')],
        ['id' => 'ai-auto', 'group' => 'Automation & AI', 'title' => 'AI Automation', 'desc' => 'Connect AI tools into real business workflows.', 'items' => ['Tool stack', 'Workflow design', 'Chatbots', 'No-code'], 'image' => service_stock_image('course-ai')],
        ['id' => 'prompt', 'group' => 'Automation & AI', 'title' => 'AI Prompt Engineering', 'desc' => 'Write prompts that produce reliable business output.', 'items' => ['Prompt frameworks', 'ChatGPT mastery', 'Content at scale', 'Use cases'], 'image' => service_stock_image('course-prompt')],
    ];
}

function home_courses(): array
{
    return array_map(static fn ($c) => ['title' => $c['title'], 'items' => array_slice($c['items'], 0, 3)], course_catalog());
}

function orbit_services(): array
{
    return ['Meta Ads', 'Google Ads', 'SMM', 'SEO', 'Web Dev', 'PHP', 'React', 'MySQL', 'AI Tools', 'E-Commerce', 'WordPress', 'Analytics'];
}

function adnexa_team_roster(): array
{
    return [
        ['slug' => 'ceo', 'name' => CEO_NAME, 'role' => CEO_ROLE, 'photo' => CEO_IMG_PROFILE, 'link' => 'ceo.php'],
        ['slug' => 'syed-mursaleen', 'name' => 'Syed Mursaleen', 'role' => 'Manager & Developer', 'photo' => 'Team/Syed Mursaleen Manager & Developer.jpeg', 'link' => 'team.php#syed-mursaleen'],
        ['slug' => 'hussain-khan', 'name' => 'Hussain Khan', 'role' => 'Sales Expert', 'photo' => 'Team/Hussain Khan Sales Expert.jpeg', 'link' => 'team.php#hussain-khan'],
        ['slug' => 'waseem-khan', 'name' => 'Waseem Khan', 'role' => 'Ads Expert', 'photo' => 'Team/Waseem Khan Ads Expert.jpeg', 'link' => 'team.php#waseem-khan'],
        ['slug' => 'syed-ali-raza', 'name' => 'Syed Ali Raza', 'role' => 'Social Media Marketing Expert', 'photo' => 'Team/Syed Ali Raza Social Media Marketing Expert.jpeg', 'link' => 'team.php#syed-ali-raza'],
        ['slug' => 'qari-attique', 'name' => 'Qari Attique', 'role' => 'Automation Expert', 'photo' => 'Team/Qari Attique Automation Expert.jpeg', 'link' => 'team.php#qari-attique'],
    ];
}

function portfolio_projects(): array
{
    return [
        ['title' => 'Mohsin Markaz — Online Store', 'category' => 'E-Commerce', 'tech' => 'React / MERN', 'image' => 'Adnan Portfolio/Portfolio images/E-Commerce/Shop-MohsinMarkaz.png', 'desc' => 'Full e-commerce storefront with product catalog and modern shopping UX.'],
        ['title' => 'Mohsin Markaz — Quality Products', 'category' => 'E-Commerce', 'tech' => 'Web App', 'image' => 'Adnan Portfolio/Portfolio images/E-Commerce/Shop-Quality-Products-Online-MohsinMarkaz.png', 'desc' => 'Brand-focused shop experience optimized for conversions.'],
        ['title' => '3D Frontend Experience', 'category' => 'React & MERN', 'tech' => 'React / Three.js', 'image' => 'Adnan Portfolio/Portfolio images/React ,Mern/screencapture-3d-frontend-n7tc-h77qvvxtj-adnan-bashirs-projects-vercel-app-2026-05-21-11_48_30.png', 'desc' => 'Interactive 3D marketing frontend deployed on Vercel.'],
        ['title' => 'Sky Education Platform', 'category' => 'React & MERN', 'tech' => 'React', 'image' => 'Adnan Portfolio/Portfolio images/React ,Mern/screencapture-sky-education-frontend-vercel-app-2026-05-21-11_50_52.png', 'desc' => 'Education platform UI with structured learning flows.'],
        ['title' => 'Sky Aesthetic Web App', 'category' => 'React & MERN', 'tech' => 'React', 'image' => 'Adnan Portfolio/Portfolio images/React ,Mern/screencapture-sky-aesthetic-izc4-vercel-app-2026-05-21-11_52_01.png', 'desc' => 'Premium aesthetic landing experience with smooth visuals.'],
        ['title' => 'Ecom Pearls', 'category' => 'PHP & Laravel', 'tech' => 'PHP', 'image' => 'Adnan Portfolio/Portfolio images/Php Laravel/screencapture-ecompearls-org-2026-05-21-11_53_41.png', 'desc' => 'Business website with service positioning and lead capture.'],
        ['title' => 'Taleem ul Quran Academy', 'category' => 'Landing Pages', 'tech' => 'HTML / CSS', 'image' => 'Adnan Portfolio/Portfolio images/Landing pages/Taleem-ul-Quran-Online-Quran-Academy-Learn-Quran-from-Home.png', 'desc' => 'Online academy landing page — learn from home positioning.'],
        ['title' => 'Admirable Biscotti Landing', 'category' => 'Landing Pages', 'tech' => 'HTML / CSS', 'image' => 'Adnan Portfolio/Portfolio images/Landing pages/screencapture-admirable-biscotti-c70afe-netlify-app-2026-05-21-12_03_05.png', 'desc' => 'Product landing page with clean layout and CTA focus.'],
        ['title' => 'Wondrous Sherbet Site', 'category' => 'HTML & CSS', 'tech' => 'Static Web', 'image' => 'Adnan Portfolio/Portfolio images/Html ,CSS/screencapture-wondrous-sherbet-3a1be9-netlify-app-2026-05-21-11_59_26.png', 'desc' => 'Responsive marketing site hosted on Netlify.'],
        ['title' => 'Brand Design Showcase', 'category' => 'Design', 'tech' => 'UI Design', 'image' => 'Adnan Portfolio/Portfolio images/E-Commerce/Untitled design.jpg', 'desc' => 'Visual design direction for digital brand presence.'],
        ['title' => 'Client Project Snapshot 1', 'category' => 'Design', 'tech' => 'Web', 'image' => 'Adnan Portfolio/1.jpg', 'desc' => 'Custom client deliverable — layout and visual polish.'],
        ['title' => 'Client Project Snapshot 2', 'category' => 'Design', 'tech' => 'Web', 'image' => 'Adnan Portfolio/2.jpg', 'desc' => 'Marketing-ready creative aligned with campaign goals.'],
        ['title' => 'Client Project Snapshot 3', 'category' => 'Design', 'tech' => 'Web', 'image' => 'Adnan Portfolio/3.jpg', 'desc' => 'Interface composition for service-based business.'],
        ['title' => 'Client Project Snapshot 4', 'category' => 'Design', 'tech' => 'Web', 'image' => 'Adnan Portfolio/4.jpg', 'desc' => 'End-to-end design support for digital launch.'],
        ['title' => 'Production Workflow', 'category' => 'Design', 'tech' => 'Process', 'image' => 'Adnan Portfolio/Portfolio images/task.jpeg', 'desc' => 'Structured delivery pipeline from brief to launch.'],
        ['title' => 'Campaign Creative A', 'category' => 'Digital Marketing', 'tech' => 'Ads', 'image' => 'Adnan Portfolio/New portfolio/WhatsApp Image 2026-06-09 at 10.31.43 PM.jpeg', 'desc' => 'Ad creative and funnel asset for paid social.'],
        ['title' => 'Campaign Creative B', 'category' => 'Digital Marketing', 'tech' => 'Ads', 'image' => 'Adnan Portfolio/New portfolio/WhatsApp Image 2026-06-09 at 10.31.44 PM.jpeg', 'desc' => 'Performance marketing visual set for client campaigns.'],
        ['title' => 'Campaign Creative C', 'category' => 'Digital Marketing', 'tech' => 'Ads', 'image' => 'Adnan Portfolio/New portfolio/WhatsApp Image 2026-06-09 at 10.31.45 PM.jpeg', 'desc' => 'Multi-format creatives for Meta & Google placements.'],
        ['title' => 'Studio Session 1', 'category' => 'Behind the Scenes', 'tech' => 'Team', 'image' => 'Adnan Portfolio/Portfolio images/WhatsApp Image 2026-06-08 at 9.05.49 PM.jpeg', 'desc' => 'Behind-the-scenes project collaboration.'],
        ['title' => 'Studio Session 2', 'category' => 'Behind the Scenes', 'tech' => 'Team', 'image' => 'Adnan Portfolio/Portfolio images/WhatsApp Image 2026-06-08 at 9.05.50 PM.jpeg', 'desc' => 'Client work in progress — design & delivery.'],
    ];
}

function portfolio_categories(): array
{
    $cats = array_unique(array_column(portfolio_projects(), 'category'));
    sort($cats);
    return array_merge(['All'], $cats);
}

function company_gallery(): array
{
    $items = [
        ['caption' => CEO_NAME . ' — ' . CEO_ROLE, 'image' => CEO_IMG_PROFILE],
        ['caption' => 'Syed Mursaleen — Manager & Developer', 'image' => 'Team/Syed Mursaleen Manager & Developer.jpeg'],
        ['caption' => 'Hussain Khan — Sales Expert', 'image' => 'Team/Hussain Khan Sales Expert.jpeg'],
        ['caption' => 'Waseem Khan — Ads Expert', 'image' => 'Team/Waseem Khan Ads Expert.jpeg'],
        ['caption' => 'Syed Ali Raza — SMM Expert', 'image' => 'Team/Syed Ali Raza Social Media Marketing Expert.jpeg'],
        ['caption' => 'Qari Attique — Automation Expert', 'image' => 'Team/Qari Attique Automation Expert.jpeg'],
        ['caption' => 'E-Commerce project delivery', 'image' => 'Adnan Portfolio/Portfolio images/E-Commerce/Shop-MohsinMarkaz.png'],
        ['caption' => 'Education platform launch', 'image' => 'Adnan Portfolio/Portfolio images/React ,Mern/screencapture-sky-education-frontend-vercel-app-2026-05-21-11_50_52.png'],
        ['caption' => 'Landing page production', 'image' => 'Adnan Portfolio/Portfolio images/Landing pages/Taleem-ul-Quran-Online-Quran-Academy-Learn-Quran-from-Home.png'],
        ['caption' => 'Campaign creatives', 'image' => 'Adnan Portfolio/New portfolio/WhatsApp Image 2026-06-09 at 10.31.46 PM.jpeg'],
        ['caption' => 'Team collaboration', 'image' => 'Adnan Portfolio/Portfolio images/WhatsApp Image 2026-06-08 at 9.05.50 PM (1).jpeg'],
        ['caption' => 'Digital marketing workspace', 'image' => 'Adnan Portfolio/New portfolio/WhatsApp Image 2026-06-09 at 10.31.48 PM.jpeg'],
    ];
    return $items;
}

function team_sections(): array
{
    return [];
}
