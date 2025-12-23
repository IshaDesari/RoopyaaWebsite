<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($routes as $item)
        @if (Str::contains($item->getName(), 'web'))
            @unless (Str::contains($item->uri, '/{id}') || Str::contains($item->uri, '/{slug}'))
                @if (Str::contains($item->action['as'], 'web.index'))
                    <url>
                        <loc>{{ url('' . $item->uri) }}</loc>
                        <lastmod>{{ date('Y-m-d') }}</lastmod>
                        <changefreq>daily</changefreq>
                        <priority>1.0</priority>
                    </url>
                @else
                    @unless (Str::contains($item->action['as'], 'search') || Str::contains($item->action['as'], 'store'))
                        <url>
                            <loc>{{ url('/' . $item->uri) }}</loc>
                            <lastmod>{{ date('Y-m-d') }}</lastmod>
                            <changefreq>daily</changefreq>
                            <priority>0.9</priority>
                        </url>
                    @endunless
                @endif
            @endunless
        @endif
    @endforeach
</urlset>
