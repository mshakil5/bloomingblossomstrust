


<div id="cookieDock" class="cookie-dock" aria-live="polite">
  <div class="dock-container">
    <div class="dock-accent-bar"></div>
    <div class="dock-body">
      <div class="dock-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#bf1354" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path><circle cx="8" cy="13" r="1"></circle><circle cx="15" cy="15" r="1"></circle><circle cx="12" cy="9" r="1"></circle></svg>
      </div>
      <div class="dock-content">
        <p>This website uses cookies to assist with navigation, improve services,
          analyse usage, and support our marketing efforts.</p>
      </div>
      <div class="dock-actions">
        <button onclick="CookieApp.accept()" class="btn-accept">Accept</button>
        <button onclick="CookieApp.hide()" class="btn-decline">Decline</button>
      </div>
    </div>
  </div>
</div>

<style>
  :root {
    --clr-primary: #bf1354;   /* Deep Magenta */
    --clr-success: #4CA30D;   /* Green */
    --clr-bg-soft: #f6efe0;   /* Cream */
    --clr-white: #fff;
    --clr-black: #000000;
  }

  .cookie-dock {
    position: fixed;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%) translateY(150%);
    width: 90%;
    max-width: 650px;
    z-index: 9999;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .cookie-dock.active {
    transform: translateX(-50%) translateY(0);
  }

  .dock-container {
    background: var(--clr-white);
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 100px; /* Pill shape */
    padding: 8px 12px 8px 24px;
    box-shadow: 0 15px 35px rgba(191, 19, 84, 0.15);
    overflow: hidden;
    position: relative;
    display: flex;
    align-items: center;
  }

  /* Thin color-coded top bar for branding */
  .dock-accent-bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, var(--clr-primary), var(--clr-success));
  }

  .dock-body {
    display: flex;
    align-items: center;
    width: 100%;
    gap: 15px;
  }

  .dock-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--clr-bg-soft);
    padding: 8px;
    border-radius: 50%;
  }

  .dock-content {
    flex-grow: 1;
  }

  .dock-content p {
    margin: 0;
    font-family: 'Segoe UI', Roboto, sans-serif;
    font-size: 14px;
    color: var(--clr-black);
    font-weight: 500;
  }

  .dock-content a {
    color: var(--clr-primary);
    text-decoration: underline;
    font-weight: 600;
  }

  .dock-actions {
    display: flex;
    gap: 8px;
  }

  .dock-actions button {
    border: none;
    padding: 10px 24px;
    border-radius: 100px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s, opacity 0.2s;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .btn-accept {
    background: var(--clr-success);
    color: var(--clr-white);
  }

  .btn-decline {
    background: var(--clr-bg-soft);
    color: var(--clr-black);
  }

  .dock-actions button:hover {
    transform: scale(1.05);
    opacity: 0.9;
  }

  /* Mobile Optimization */
  @media (max-width: 600px) {
    .dock-container {
      border-radius: 20px;
      padding: 15px;
    }
    .dock-body {
      flex-direction: column;
      text-align: center;
    }
    .dock-actions {
      width: 100%;
    }
    .dock-actions button {
      flex: 1;
    }
  }
</style>

<script>
  const CookieApp = {
    storageKey: 'user_cookie_choice',

    init() {
      const choice = localStorage.getItem(this.storageKey);
      if (!choice) {
        setTimeout(() => {
          document.getElementById('cookieDock').classList.add('active');
        }, 1200);
      }
    },

    accept() {
      localStorage.setItem(this.storageKey, 'accepted');
      this.hide();
    },

    hide() {
      document.getElementById('cookieDock').classList.remove('active');
    }
  };

  document.addEventListener('DOMContentLoaded', () => CookieApp.init());
</script>


