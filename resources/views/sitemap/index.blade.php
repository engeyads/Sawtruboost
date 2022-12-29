<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
                <url>
                    <loc>https://sawtruboost.com</loc>
                </url>
                <url>
                    <loc>{{ route('services') }}</loc>
                </url>
                <url>
                    <loc>{{ route('about') }}</loc>
                </url>
                <url>
                    <loc>{{ route('contact') }}</loc>
                </url>
                <url>
                    <loc>{{ route('people') }}</loc>
                </url>
                <url>
                    <loc>{{ route('careers') }}</loc>
                </url>
                <url>
                    <loc>{{ route('partners') }}</loc>
                </url>
                <url>
                    <loc>{{ route('terms') }}</loc>
                </url>
                <url>
                    <loc>{{ route('privacy') }}</loc>
                </url>
                <url>
                    <loc>{{ route('cookies') }}</loc>
                </url>
                <url>
                    <loc>{{ route('boostnow') }}</loc>
                </url>
            </urlset>
    @if($post != null)
        <loc>{{ route('blog.endindex') }}</loc>
        <lastmod>{{ $post->first()->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        @foreach ($post as $postz)

            <loc>{{ route('blog.endshow',$postz->id) }}</loc>
            <lastmod>{{ $postz->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        @endforeach
    @endif
    </sitemap>
</sitemapindex>
