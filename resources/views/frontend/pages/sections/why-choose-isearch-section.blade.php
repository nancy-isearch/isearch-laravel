@push('styles')
<style>
.text-normal {
  text-transform: none;
}
.why-choose-section .icon--cc {
  --cc-icon-size: 24px;
  --cc-icon-color: currentColor;
  display: inline-block;
  width: var(--cc-icon-size);
  height: var(--cc-icon-size);
  color: var(--cc-icon-color);
  fill: currentColor;
}
.why-choose-section {
  background: radial-gradient(circle at 85% 15%, rgba(7, 79, 174, 0.24) 0%, transparent 45%),
              radial-gradient(circle at 10% 85%, rgba(14, 165, 233, 0.16) 0%, transparent 45%),
              #223246;
  color: #fff;
  position: relative;
  overflow: hidden;
  padding-block: clamp(50px, 6vw, 85px);
}
.why-choose-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
  background-size: 32px 32px;
  pointer-events: none;
  opacity: 0.7;
}
.why-choose-section .container-fluid {
  position: relative;
  z-index: 1;
}
.why-choose-section .wc-header-wrap {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
@media (min-width: 992px) {
  .why-choose-section .wc-header-wrap {
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
  }
}
.why-choose-section .wc-title {
  font-size: clamp(28px, 3vw + 10px, 42px);
  font-weight: 600;
  color: #ffffff;
  line-height: 1.2;
  margin-bottom: 10px;
}
.why-choose-section .wc-title span {
  color: inherit;
}
.why-choose-section .wc-sub {
  font-size: clamp(14px, 0.8vw + 10px, 16px);
  color: rgba(255, 255, 255, 0.75);
  max-width: 640px;
  line-height: 1.6;
  margin-bottom: 0;
}
.why-choose-section .wc-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 28px;
  border-radius: 100px;
  background: #ffffff;
  color: #074fae;
  font-size: 14px;
  font-weight: 700;
  border: none;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: none;
  white-space: nowrap;
  text-decoration: none;
}
.why-choose-section .wc-btn:hover {
  background: #f0f6ff;
  color: #053b82;
  transform: translateY(-2px);
  box-shadow: none;
}
.why-choose-section .wc-btn svg {
  width: 18px;
  height: 18px;
  color: #074fae;
  transition: transform 0.25s ease;
}
.why-choose-section .wc-btn:hover svg {
  transform: translateX(4px);
}
.why-choose-section .wc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 48px;
}
.why-choose-section .wc-card {
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 20px;
  padding: 30px 26px;
  display: flex;
  flex-direction: column;
  transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  position: relative;
  overflow: hidden;
}
.why-choose-section .wc-card::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 20px;
  background: radial-gradient(circle at 20% 0%, rgba(96, 165, 250, 0.15), transparent 70%);
  opacity: 0;
  transition: opacity 0.35s ease;
  pointer-events: none;
}
.why-choose-section .wc-card:hover::before {
  opacity: 1;
}
.why-choose-section .wc-card:hover {
  background: rgba(255, 255, 255, 0.07);
  border-color: rgba(255, 255, 255, 0.18);
  transform: translateY(-5px);
  box-shadow: 0 20px 42px -12px rgba(0, 0, 0, 0.45);
}
.why-choose-section .wc-icon-wrap {
  width: 50px;
  height: 50px;
  border-radius: 14px;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  margin-bottom: 22px;
  transition: all 0.3s ease;
}
.why-choose-section .wc-icon-wrap svg {
  width: 24px;
  height: 24px;
  color: #ffffff;
}
.why-choose-section .wc-card:hover .wc-icon-wrap {
  background: rgba(255, 255, 255, 0.14);
  border-color: rgba(255, 255, 255, 0.3);
  color: #ffffff;
  transform: scale(1.06);
}
.why-choose-section .wc-card-title {
  font-size: 18px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 10px;
  line-height: 1.35;
}
.why-choose-section .wc-card-desc {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.72);
  margin-bottom: 0;
  line-height: 1.55;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
@media (max-width: 991px) {
  .why-choose-section .wc-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 36px;
  }
}
@media (max-width: 575px) {
  .why-choose-section .wc-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .why-choose-section .wc-card {
    padding: 24px 20px;
  }
}
</style>
@endpush

<!-- Hidden Inline SVG Sprite -->
<svg style="display: none;" aria-hidden="true">
  <defs>
    <symbol id="arrow-right-01-stroke-rounded" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M20 12L4 12M15 17C15 17 20 13.3176 20 12C20 10.6824 15 7 15 7" />
    </symbol>
    <symbol id="target-02-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" fill="none">
      <path d="M17 12c0 2.7614-2.2386 5-5 5-2.7614 0-5-2.2386-5-5 0-2.7614 2.2386-5 5-5" />
      <path d="M14 2.2C13.3538 2.0689 12.6849 2 12 2 6.4772 2 2 6.4772 2 12c0 5.5228 4.4772 10 10 10 5.5228 0 10-4.4772 10-10 0-0.6849-0.0689-1.3538-0.2-2" />
      <path d="M12.0303 11.9625l4.5529-4.5529M19.7404 4.3446 19.1872 2.3575c-0.1019-0.3274-0.4958-0.4578-0.7613-0.2409-1.4361 1.1736-3.0005 2.7543-1.7229 5.2476 2.5741 1.2004 4.0436-0.4184 5.1703-1.7789 0.2242-0.2707 0.089-0.6776-0.2486-0.7752z" />
    </symbol>
    <symbol id="chart-increase-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" fill="none">
      <path d="M21 21H10C6.70017 21 5.05025 21 4.02513 19.9749C3 18.9497 3 17.2998 3 14V3"></path>
      <path d="M7.99707 16.999C11.5286 16.999 18.9122 15.5348 18.6979 6.43269M16.4886 8.04302L18.3721 6.14612C18.5656 5.95127 18.8798 5.94981 19.0751 6.14286L20.9971 8.04302" stroke-linejoin="round"></path>
    </symbol>
    <symbol id="chart-analysis-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M3 11 5.5 8.5c1.0171-1.0171 1.5256-1.5256 2.1372-1.6384 0.2398-0.0442 0.4857-0.0442 0.7256 0C8.9744 6.9744 9.483 7.483 10.5 8.5c1.0171 1.017 1.5256 1.5256 2.1372 1.6384 0.2399 0.0442 0.4857 0.0442 0.7256 0C13.9744 10.0256 14.4829 9.5171 15.5 8.5L21 3" />
      <path d="M3 15v6M9 13v8M15 16v5M21 9v12" />
    </symbol>
    <symbol id="shield-01-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M18.7088 3.4953C16.8165 2.5538 14.5009 2 12 2S7.1835 2.5538 5.2912 3.4953c-0.928 0.4618-1.392 0.6926-1.8416 1.4185C3 5.6396 3 6.3425 3 7.7481v3.489c0 5.6834 4.5424 8.8433 7.173 10.1967C10.9067 21.8113 11.2735 22 12 22s1.0933-0.1887 1.8269-0.5662C16.4576 20.0804 21 16.9205 21 11.2371v-3.489c0-1.4056 0-2.1084-0.4496-2.8343-0.4496-0.7259-0.9136-0.9567-1.8416-1.4185z" />
    </symbol>
    <symbol id="user-check-02-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none">
      <path d="M14 8.5C14 5.73858 11.7614 3.5 9 3.5C6.23858 3.5 4 5.73858 4 8.5C4 11.2614 6.23858 13.5 9 13.5C11.7614 13.5 14 11.2614 14 8.5Z"></path>
      <path d="M16 20.5C16 16.634 12.866 13.5 9 13.5C5.13401 13.5 2 16.634 2 20.5"></path>
      <path d="M16 12.3929C16 12.3929 17.2 13.0447 17.8 14C17.8 14 19.6 10.25 22 9"></path>
    </symbol>
    <symbol id="globe-02-stroke-rounded" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none">
      <circle cx="12" cy="12" r="10" />
      <path d="M8 12c0 6 4 10 4 10s4-4 4-10-4-10-4-10-4 4-4 10z" />
      <path d="M21 15H3" />
      <path d="M21 9H3" />
    </symbol>
  </defs>
</svg>

<!-- Why Choose iSearchSolution Section Component -->
<section class="why-choose-section">
  <div class="container-fluid">
    <div class="wc-header-wrap">
      <div>
        <h2 class="wc-title">{!! $content['heading'] ?? 'Why Choose <span class="text-normal">iSearchSolution?</span>' !!}</h2>
        <p class="wc-sub">{!! $content['description'] ?? 'We specialize in services like Site Quality Assessments, Link Auditing.' !!}</p>
      </div>
      <div>
        @if(!empty($content['btn_link']))
          <a href="{{ $content['btn_link'] }}" class="wc-btn">
            <span>{{ $content['btn_text'] ?? 'Talk to SEO Expert' }}</span>
            <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="#arrow-right-01-stroke-rounded"></use></svg>
          </a>
        @else
          <button type="button" class="wc-btn openPopupBtn">
            <span>{{ $content['btn_text'] ?? 'Talk to SEO Expert' }}</span>
            <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="#arrow-right-01-stroke-rounded"></use></svg>
          </button>
        @endif
      </div>
    </div>

    @php
      $cards = $content['cards'] ?? [
        ['card_title' => 'Market-Driven Strategies', 'card_description' => 'Custom SEO blueprints tailored to Delhi’s competitive market, focused on high-converting keywords.', 'card_icon' => 'target-02-stroke-rounded'],
        ['card_title' => 'Result-Oriented Approach', 'card_description' => 'Every optimization is mapped to measurable outcomes—higher rankings, qualified traffic, and ROI.', 'card_icon' => 'chart-increase-stroke-rounded'],
        ['card_title' => 'Transparent Reporting', 'card_description' => 'Clear, comprehensive monthly ranking dashboards with zero ambiguity to track true organic progress.', 'card_icon' => 'chart-analysis-stroke-rounded'],
        ['card_title' => 'No Fake Promises, Real Growth', 'card_description' => 'Strict 100% white-hat methodologies compliant with Google guidelines to keep your domain safe.', 'card_icon' => 'shield-01-stroke-rounded'],
        ['card_title' => 'Dedicated SEO Managers', 'card_description' => 'A dedicated senior SEO strategist proactively driving campaign optimizations every single sprint.', 'card_icon' => 'user-check-02-stroke-rounded'],
        ['card_title' => 'Multi-Industry Experience', 'card_description' => 'Demonstrated domain mastery scaling local businesses, eCommerce leaders, and B2B enterprises.', 'card_icon' => 'globe-02-stroke-rounded']
      ];
    @endphp
    <div class="wc-grid">
      @foreach($cards as $card)
        @php
          $cardTitle = $card['card_title'] ?? $card['title'] ?? '';
          $cardDesc = $card['card_description'] ?? $card['description'] ?? '';
          $cardIcon = $card['card_icon'] ?? $card['icon'] ?? 'target-02-stroke-rounded';
          if (str_contains($cardIcon, '#')) {
            $cardIcon = explode('#', $cardIcon)[1];
          }
        @endphp
        @if(!empty(trim($cardTitle)))
          <div class="wc-card">
            <div class="wc-icon-wrap" aria-hidden="true">
              <svg class="icon--cc" aria-hidden="true" focusable="false"><use href="#{{ $cardIcon }}"></use></svg>
            </div>
            <h3 class="wc-card-title">{{ $cardTitle }}</h3>
            <p class="wc-card-desc">{{ $cardDesc }}</p>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
