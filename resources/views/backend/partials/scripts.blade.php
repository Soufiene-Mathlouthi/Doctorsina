<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('backend_assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend_assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend_assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend_assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend_assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend_assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('backend_assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

      <!-- chatbot main js File -->
  <script type="text/javascript" src="{{ asset('chatbot/chatbot.js') }}"></script>
  <script> createChatBot(host = 'https://rasa-theamineguesmi.cloud.okteto.net/webhooks/rest/webhook', botLogo = "https://yugasa.com/wp-content/uploads/2021/11/Chatbot-for-Support.png", title = "CHAT ", welcomeMessage = "Hey, i am DoctorSina Bot ", inactiveMsg = "Server is down, Please contact the developer to activate it ", theme="blue ") </script>