<?php
/* Template Name: Donate Page */
get_header();
?>

<section class="page-header">
  <div class="page-header-content">
    <h1>Donate</h1>
    <p><a href="<?php echo home_url(); ?>">Home</a> / Donate</p>
  </div>
</section>

<section class="donate-section fade-in">

  <div class="donate-intro">
    <h2>Your Support Changes Lives</h2>
    <p>
      Your generosity helps provide dignity, protection, and essential support
      to girls and women affected by poverty in South Africa.
    </p>
  </div>

  <!-- PAYFAST FORM -->
  <div class="donation-row">

    <form action="https://www.payfast.co.za/eng/process" method="post">
      <!-- PAYFAST DETAILS -->
      <input type="hidden" name="merchant_id" value="YOUR_MERCHANT_ID">
      <input type="hidden" name="merchant_key" value="YOUR_MERCHANT_KEY">

      <input type="hidden" name="item_name" value="Donation to Proverbs 31:25 Foundation">
      <input type="hidden" name="notify_url" value="<?php echo home_url('/payfast-itn'); ?>">
      <input type="hidden" name="return_url" value="<?php echo home_url('/thank-you'); ?>">
      <input type="hidden" name="cancel_url" value="<?php echo home_url('/donate'); ?>">

      <!-- AMOUNT -->
      <input 
        type="number"
        name="amount"
        placeholder="Enter amount (ZAR)"
        min="10"
        step="1"
        required
        style="padding:12px;width:100%;margin-bottom:15px;"
      >

      <button type="submit" class="donate-btn dark">
        Donate via PayFast
      </button>
    </form>

    <button class="donate-btn purple" id="eftBtn">
      Donate via EFT
    </button>

  </div>

  <div class="donation-logos">
    <img src="<?php echo get_template_directory_uri(); ?>/images/payfast.png" alt="PayFast">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bank-transfer.png" alt="Bank Transfer">
  </div>

</section>

<!-- EFT MODAL -->
<div class="modal" id="eftModal">
  <div class="modal-content">
    <span class="close">&times;</span>

    <h3>EFT Bank Details</h3>
    <p><strong>Account Name:</strong> Aphiwe Mshengu</p>
    <p><strong>Bank:</strong> TymeBank</p>
    <p><strong>Account Number:</strong> 51134411570</p>
    <p><strong>Branch Code:</strong> 678910</p>
    <p><strong>Account Type:</strong> Transactional</p>
    <p><strong>SWIFT:</strong> TYMEZAJJ</p>
    <p><strong>Reference:</strong> Donation</p>

    <small>
      Thank you for supporting the cause ❤️
    </small>
  </div>
</div>

<?php get_footer(); ?>
