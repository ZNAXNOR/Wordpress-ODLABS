function setupHeaderLogic() {
  const openMenuBtn = document.querySelector(
    'button[aria-label="Open main menu"]',
  );
  const closeMenuBtn = document.querySelector(
    'button[aria-label="Close menu"]',
  );
  const mobileMenu = document.querySelector(
    'header > .lg\\:hidden[role="dialog"]',
  );

  if (openMenuBtn && mobileMenu && closeMenuBtn) {
    openMenuBtn.addEventListener("click", () =>
      mobileMenu.classList.remove("hidden"),
    );
    closeMenuBtn.addEventListener("click", () =>
      mobileMenu.classList.add("hidden"),
    );
  }

  // Close mobile menu when any link clicked
  const menuLinks = mobileMenu?.querySelectorAll("a[href]");
  if (menuLinks) {
    menuLinks.forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
      });
    });
  }

  // Mobile 'Product' submenu toggle
  const productToggle = mobileMenu?.querySelector(
    'button[aria-controls="products"]',
  );
  const productMenu = mobileMenu?.querySelector("#products");
  const productIcon = productToggle?.querySelector("i");

  if (productToggle && productMenu && productIcon) {
    productMenu.style.display = "none";
    productToggle.addEventListener("click", () => {
      const expanded = productToggle.getAttribute("aria-expanded") === "true";
      productToggle.setAttribute("aria-expanded", !expanded);
      productMenu.style.display = expanded ? "none" : "block";
      productIcon.classList.toggle("rotate-180", !expanded);
    });
  }

  // Desktop dropdown toggle on click
  const desktopProductBtn = document.querySelector(
    "header .lg\\:flex button[aria-expanded]",
  );
  const desktopFlyout = desktopProductBtn
    ?.closest("div.relative")
    ?.querySelector("div.absolute");

  if (desktopProductBtn && desktopFlyout) {
    // Start hidden
    desktopFlyout.classList.add("hidden");
    desktopProductBtn.setAttribute("aria-expanded", "false");

    // Toggle on click
    desktopProductBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = desktopFlyout.classList.contains("hidden") === false;
      if (isOpen) {
        desktopFlyout.classList.add("hidden");
        desktopProductBtn.setAttribute("aria-expanded", "false");
      } else {
        desktopFlyout.classList.remove("hidden");
        desktopProductBtn.setAttribute("aria-expanded", "true");
      }
    });

    // Close on click outside
    document.addEventListener("click", (e) => {
      if (
        !desktopFlyout.classList.contains("hidden") &&
        !desktopFlyout.contains(e.target) &&
        !desktopProductBtn.contains(e.target)
      ) {
        desktopFlyout.classList.add("hidden");
        desktopProductBtn.setAttribute("aria-expanded", "false");
      }
    });
  }
}

// Call the function after DOM
document.addEventListener("DOMContentLoaded", setupHeaderLogic);
