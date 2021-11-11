<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{ route('goreala') }}</loc>
        <priority>1.00</priority>
    </url>
    @foreach ($blog as $blog)
        <url>
            <loc>{{ route('blog.detail',$blog->slug) }}</loc>
            <lastmod>{{ $blog->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <priority>0.80</priority>
        </url>
    @endforeach
    <url>
        <loc>{{ route('login_user') }}</loc>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ route('resgister.user') }}</loc>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{{ route('forget.password') }}</loc>
        <priority>0.80</priority>
    </url>
</urlset>