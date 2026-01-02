<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$readme = file_get_contents('README.md');
$howToFiles = glob('how-to/*');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtream UI Tools</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            color: #e0e0e0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
        }
        h1 {
            font-size: 2.5rem;
            color: #00d4ff;
            margin-bottom: 10px;
        }
        .subtitle {
            color: #888;
            font-size: 1.1rem;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 24px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 40px rgba(0,212,255,0.1);
        }
        .card h3 {
            color: #00d4ff;
            margin-bottom: 12px;
            font-size: 1.2rem;
        }
        .card p {
            color: #aaa;
            font-size: 0.95rem;
        }
        .card ul {
            list-style: none;
            margin-top: 12px;
        }
        .card ul li {
            padding: 6px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            font-size: 0.9rem;
        }
        .card ul li:last-child {
            border-bottom: none;
        }
        .section-title {
            color: #00d4ff;
            font-size: 1.5rem;
            margin: 40px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(0,212,255,0.3);
        }
        .how-to-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 12px;
        }
        .how-to-item {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            padding: 12px 16px;
            color: #ccc;
            font-size: 0.9rem;
            transition: background 0.2s;
        }
        .how-to-item:hover {
            background: rgba(0,212,255,0.1);
        }
        .icon {
            margin-right: 8px;
        }
        footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #666;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Xtream UI Tools</h1>
            <p class="subtitle">A collection of modifications, tools, and utilities for Xtream UI</p>
        </header>

        <div class="cards">
            <div class="card">
                <h3>Admin Modified Files</h3>
                <p>Enhanced admin panel files with additional features and fixes.</p>
                <ul>
                    <li>Dashboard improvements</li>
                    <li>User management enhancements</li>
                    <li>API modifications</li>
                    <li>MAG device support</li>
                </ul>
            </div>

            <div class="card">
                <h3>Cron Jobs</h3>
                <p>Automated backup and monitoring scripts.</p>
                <ul>
                    <li>Auto backup (standard)</li>
                    <li>Auto backup (rclone)</li>
                    <li>PID monitor</li>
                    <li>Server checker</li>
                </ul>
            </div>

            <div class="card">
                <h3>Nginx Configurations</h3>
                <p>Ready-to-use Nginx configuration files.</p>
                <ul>
                    <li>Standard nginx.conf</li>
                    <li>Load balancer config</li>
                    <li>ISP API config</li>
                    <li>Reverse proxy config</li>
                </ul>
            </div>

            <div class="card">
                <h3>Python Tools</h3>
                <p>Utility scripts for system management.</p>
                <ul>
                    <li>Load balancer</li>
                    <li>Hack checker</li>
                    <li>DB password regeneration</li>
                    <li>MySQL restriction</li>
                </ul>
            </div>

            <div class="card">
                <h3>ISP Tools</h3>
                <p>ISP detection and GeoIP functionality.</p>
                <ul>
                    <li>Standard ISP API</li>
                    <li>MaxMind GeoIP integration</li>
                    <li>ASN database support</li>
                </ul>
            </div>

            <div class="card">
                <h3>WWW Directory Files</h3>
                <p>Modified web-facing files.</p>
                <ul>
                    <li>Player API</li>
                    <li>Panel API</li>
                    <li>Portal integration</li>
                    <li>XMLTV support</li>
                </ul>
            </div>
        </div>

        <h2 class="section-title">How-To Guides</h2>
        <div class="how-to-list">
            <?php foreach ($howToFiles as $file): ?>
                <div class="how-to-item">
                    <span class="icon">📄</span>
                    <?php echo htmlspecialchars(basename($file)); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <footer>
            <p>Xtream UI Tools - For educational and reference purposes</p>
        </footer>
    </div>
</body>
</html>
