const openModal = document.getElementById('open-dialog');
const closeModal = document.getElementById('close-dialog');
const modal = document.getElementById('modal');

openModal.addEventListener('click', () => {
modal.showModal();
});

closeModal.addEventListener('click', () => {
modal.close();
});