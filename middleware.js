export default function middleware(request) {
  const { pathname } = new URL(request.url);

  if (/^\/v[1-5](\/|$)/.test(pathname)) {
    return new Response(
      `<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>IIFR — Page Not Found</title>
<style>
  *{box-sizing:border-box;margin:0;padding:0}
  html,body{height:100%;font-family:'Source Sans 3',-apple-system,BlinkMacSystemFont,sans-serif;background:#f4ede0;color:#0d1b3e}
  body{display:flex;align-items:center;justify-content:center;padding:24px}
  .wrap{max-width:640px;width:100%;text-align:center}
  h1{font-family:Georgia,serif;font-weight:700;font-size:42px;margin-bottom:14px}
  p{font-size:17px;color:#3c4358;line-height:1.55}
  .badge{display:inline-block;margin-bottom:24px;padding:8px 18px;font-size:12px;letter-spacing:.18em;text-transform:uppercase;color:#c9900c;font-weight:700;border:1px solid #e5d9bf;border-radius:999px;background:#fff}
</style>
</head>
<body>
<div class="wrap">
  <span class="badge">404</span>
  <h1>Page not found</h1>
  <p>The page you are looking for does not exist.</p>
</div>
</body>
</html>`,
      {
        status: 404,
        headers: { 'content-type': 'text/html; charset=utf-8' },
      }
    );
  }
}

export const config = {
  matcher: [
    '/v1',
    '/v1/:path*',
    '/v2',
    '/v2/:path*',
    '/v3',
    '/v3/:path*',
    '/v4',
    '/v4/:path*',
    '/v5',
    '/v5/:path*',
  ],
};
