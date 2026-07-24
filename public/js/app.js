// Interações puramente visuais (troca de aba, seleção de condição).
// Tudo que envolve dados de verdade (lance, sorteio, mensagem) é feito
// via formulário Blade normal, processado no servidor.

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-cond-group]').forEach((group) => {
    group.querySelectorAll('.cond-opt').forEach((btn) => {
      btn.addEventListener('click', () => {
        group.querySelectorAll('.cond-opt').forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');
      });
    });
  });

  document.querySelectorAll('[data-tabs-group]').forEach((group) => {
    const tabs = group.querySelectorAll('.tab');
    const panels = group.querySelectorAll('[data-tab-panel]');
    tabs.forEach((tab, i) => {
      tab.addEventListener('click', () => {
        tabs.forEach((t) => t.classList.remove('active'));
        panels.forEach((p) => (p.hidden = true));
        tab.classList.add('active');
        if (panels[i]) panels[i].hidden = false;
      });
    });
  });
});
