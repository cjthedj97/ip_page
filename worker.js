export default {
    async fetch(request) {
      const url = new URL(request.url);
      // Use startsWith to accommodate both /m and /m/ paths
      const pathStartsWithM = url.pathname.startsWith('/m');
      const userAgent = request.headers.get('User-Agent') || '';
      const clientIP = request.headers.get('CF-Connecting-IP');
  
      // Identify a list of specific user agents for special handling
      const specialUserAgents = [
        'curl', 'wget', 'WindowsPowerShell', 'Go-http-client', 'Lynx',
        'libwww-perl', 'libcurl-agent', 'Java', 'PycURL', 'PECL::HTTP', 'ddclient'
      ];
  
      // Check if the user agent matches any in the list or the path starts with /m
      const isSpecialUserAgent = specialUserAgents.some(ua => userAgent.includes(ua));
  
      if (pathStartsWithM || isSpecialUserAgent) {
        return new Response(clientIP);
      }
  
      // Generate HTML content with IP information for all other paths
      const htmlContent = generateIPInfoHTML(request);
  
      const htmlStyle = `
        body { padding: 6em; background-color: #222831; color: #ececec; } .light-mode { background-color: white; color: black; }
      `;
  
      const html = `
        <!DOCTYPE html>
        <html>
        <head>
          <title>Your IP Information</title>
          <style>${htmlStyle}</style>
          <link rel="shortcut icon" href="https://cjthedj97.me/fav.ico" type="image/x-icon" />
        </head>
        <body>
          <h2>Your IP Information</h2>
          ${htmlContent}
          <h4>For a minimal ip page go to <a href=/m/>Minimal Page</a></h4>
          <button onclick="toggleLightMode()">Toggle light mode</button>
          <script>
          function toggleLightMode() {
            var element = document.body;
            element.classList.toggle("light-mode");
          }
          </script>
        </body>
        </html>
      `;
  
      return new Response(html, {
        headers: { "content-type": "text/html;charset=UTF-8" },
      });
    }
  }
  
  function generateIPInfoHTML(request) {
    const cf = request.cf || {};
    const headers = request.headers;
    let htmlContent = `
      <p>IP: ${headers.get('CF-Connecting-IP')}</p>
      <p>Country: ${cf.country}</p>
      <p>User Agent: ${headers.get('User-Agent')}</p>
  
      <h3>Geolocation Data</h3>
      <p>Colo: ${cf.colo}</p>
      <p>City: ${cf.city}</p>
      <p>PostalCode: ${cf.postalCode}</p>
      <p>MetroCode: ${cf.metroCode}</p>
      <p>Timezone: ${cf.timezone}</p>
      <p>Region: ${cf.region}</p>
      <p>RegionCode: ${cf.regionCode}</p>
      <p>Continent: ${cf.continent}</p>
      <p>Latitude: ${cf.latitude}</p>
      <p>Longitude: ${cf.longitude}</p>
  
      `;
  
    return htmlContent;
  }  