// Data, hora e número da ordem de serviço.
const agora = new Date()

const data = document.getElementById("data")
const hora = document.getElementById("hora")
const os = document.getElementById("os")

if (data) data.textContent = agora.toLocaleDateString("pt-BR")
if (hora) hora.textContent = agora.toLocaleTimeString("pt-BR")
if (os) os.textContent = Math.floor(Math.random() * 9000) + 1000

// Menu responsivo.
function toggleMenu(event) {
  if (event) {
    event.preventDefault();
    event.stopPropagation();
  }

  const menuList = document.getElementById("menu-list");
  const menuToggle = document.querySelector(".menu-toggle");

  if (!menuList) return false;

  const aberto = !menuList.classList.contains("aberto");
  menuList.classList.toggle("aberto", aberto);

  if (menuToggle) {
    menuToggle.setAttribute("aria-expanded", String(aberto));
  }

  return false;
}

document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const menuList = document.getElementById("menu-list");

  if (!menuToggle || !menuList) return;

  // Mantém o funcionamento mesmo se o botão for acionado por teclado.
  menuToggle.addEventListener("keydown", (event) => {
    if (event.key === "Enter" || event.key === " ") {
      event.preventDefault();
      toggleMenu(event);
    }
  });

  menuList.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      menuList.classList.remove("aberto");
      menuToggle.setAttribute("aria-expanded", "false");
    });
  });
});

function mostrarCarros() {
  const painel = document.getElementById("maisCarros")
  if (painel) painel.classList.add("aberto")
}

function fecharCarros() {
  const painel = document.getElementById("maisCarros")
  if (painel) painel.classList.remove("aberto")
}
