@props(["user"])
@if($message = session()->get("success"))

<dialog id="my_modal_2" class="modal bg-[#110F0E] backdrop-blur-md">
  <div class="modal-box bg-[#110F0E]">
    <h3 class="text-2xl font-bold">Tudo certo, {{ $user->name }}!</h3>
    <p class="py-4 text-lg">
      {{ $message }}. Sua ação foi concluída. ✅
    </p>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>Fechar</button>
  </form>
</dialog>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const myModal2 = document.getElementById("my_modal_2");
    myModal2.showModal();
});
</script>
@endif
