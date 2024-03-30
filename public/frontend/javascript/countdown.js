/**
 * Skipped minification because the original files appears to be already minified.
 * Original file: /npm/timezz@7.0.0/dist/timezz.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
!function (e, t) { "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define("timezz", [], t) : "object" == typeof exports ? exports.timezz = t() : e.timezz = t() }("undefined" == typeof self ? this : self, (function () { return function () { "use strict"; var e = {}; return function () { var t = e; function n(e) { return n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) { return typeof e } : function (e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e }, n(e) } function o(e, t) { var n = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); t && (o = o.filter((function (t) { return Object.getOwnPropertyDescriptor(e, t).enumerable }))), n.push.apply(n, o) } return n } function r(e) { for (var t = 1; t < arguments.length; t++) { var n = null != arguments[t] ? arguments[t] : {}; t % 2 ? o(Object(n), !0).forEach((function (t) { s(e, t, n[t]) })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : o(Object(n)).forEach((function (t) { Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t)) })) } return e } function i(e, t) { for (var n = 0; n < t.length; n++) { var o = t[n]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o) } } function s(e, t, n) { return t in e ? Object.defineProperty(e, t, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : e[t] = n, e } var a = 60, c = 24, u = 365, f = 36e5, h = 864e5, d = 31536e6, l = /^(\d{4})[-/]?(\d{1,2})?[-/]?(\d{0,2})[^0-9]*(\d{1,2})?:?(\d{1,2})?:?(\d{1,2})?[.:]?(\d+)?$/, p = ["years", "days", "hours", "minutes", "seconds"], y = function (e) { return Math.floor(Math.abs(e)) }, m = "[TimezZ]", b = "https://github.com/BrooonS/timezz", v = function () { function e(t, n) { var o = this; !function (e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }(this, e), s(this, "element", void 0), s(this, "date", void 0), s(this, "pause", !1), s(this, "stopOnZero", !0), s(this, "isDestroyed", !1), s(this, "beforeCreate", void 0), s(this, "beforeUpdate", void 0), s(this, "update", void 0), s(this, "HTMLParts", p.reduce((function (e, t) { return r(r({}, e), {}, s({}, t, null)) }), {})), s(this, "timeout", null), s(this, "checkFields", (function (e) { var t = function (t, n) { void 0 !== e[t] && n.length && console.warn("".concat(m, ":"), "Parameter '".concat(t, "' should be ").concat(n.length > 1 ? "one of the types" : "the type", ": ").concat(n.join(", "), "."), o.element) }; "boolean" != typeof e.pause && t("pause", ["boolean"]), "boolean" != typeof e.stopOnZero && t("stopOnZero", ["boolean"]), "function" != typeof e.beforeCreate && t("beforeCreate", ["function"]), "function" != typeof e.beforeUpdate && t("beforeUpdate", ["function"]), "function" != typeof e.update && t("update", ["function"]) })), this.element = t, this.checkFields(n), this.date = function (e) { if (e instanceof Date) return new Date(e); if ("string" == typeof e && !/Z$/i.test(e)) { var t = e.match(l); if (t) { var n = t[2] - 1 || 0, o = (t[7] || "0").substring(0, 3); return new Date(t[1], n, t[3] || 1, t[4] || 0, t[5] || 0, t[6] || 0, o) } } if ("Invalid Date" === new Date(e).toString()) throw new Error("".concat(m, ": Date is invalid. Check documentation for more info. ").concat(b)); return new Date(e) }(n.date), this.pause = n.pause || !1, this.stopOnZero = "boolean" != typeof n.stopOnZero || n.stopOnZero, this.beforeCreate = n.beforeCreate, this.beforeUpdate = n.beforeUpdate, this.update = n.update, "function" == typeof this.beforeCreate && this.beforeCreate(), this.init() } var t, n; return t = e, (n = [{ key: "init", value: function () { this.isDestroyed = !1, this.updateHTMLParts(); var e = new Date(this.date).getTime() - (new Date).getTime(), t = !!this.stopOnZero && e < 0, n = t ? p.reduce((function (e, t) { return r(r({}, e), {}, s({}, t, 0)) }), {}) : this.calculate(e), o = r(r({}, n), {}, { distance: Math.abs(e), isTimeOver: e <= 0 }); "function" == typeof this.beforeUpdate && this.beforeUpdate(), (t || this.pause) && this.timeout || this.setHTML(o), "function" == typeof this.update && this.update(o), this.timeout || (this.timeout = setInterval(this.init.bind(this), 1e3)) } }, { key: "calculate", value: function (e) { var t = { years: null, days: null, hours: null, minutes: null, seconds: null }, n = y(e % 6e4 / 1e3), o = y(e % f / 6e4), r = y(e % h / f), i = y(e % d / h), s = y(e / d); return this.HTMLParts.seconds && (t.seconds = n), this.HTMLParts.minutes ? t.minutes = o : t.seconds = (t.days || n) + 60 * o, this.HTMLParts.hours ? t.hours = r : this.HTMLParts.minutes ? t.minutes = (t.minutes || o) + r * a : this.HTMLParts.seconds && (t.seconds = (t.seconds || n) + r * a * 60), this.HTMLParts.days ? t.days = i : this.HTMLParts.hours ? t.hours = (t.hours || r) + i * c : this.HTMLParts.minutes ? t.minutes = (t.minutes || o) + i * c * a : this.HTMLParts.seconds && (t.seconds = (t.seconds || n) + i * c * a * 60), this.HTMLParts.years ? t.years = s : this.HTMLParts.days ? t.days = (t.days || i) + s * u : this.HTMLParts.hours ? t.hours = (t.hours || r) + s * u * c : this.HTMLParts.minutes ? t.minutes = (t.minutes || o) + s * u * c * a : this.HTMLParts.seconds && (t.seconds = (t.seconds || n) + s * u * c * a * 60), t } }, { key: "updateHTMLParts", value: function () { var e = this; p.forEach((function (t) { var n = e.element.querySelector("[data-".concat(t, "]")); n && (e.HTMLParts[t] = n) })) } }, { key: "setHTML", value: function (e) { var t = this; p.forEach((function (n) { if (!t.element) throw new Error("".concat(m, ": Element isn't passed. Check documentation for more info. ").concat(b)); var o = e[n]; if (null !== o) { var r = t.element.querySelector("[data-".concat(n, "]")), i = function (e) { return e >= 10 ? "".concat(e) : "0".concat(e) }(o); r && r.innerHTML !== i && (r.innerHTML = i) } })) } }, { key: "destroy", value: function () { var e = this; this.timeout && (clearInterval(this.timeout), this.timeout = null), p.forEach((function (t) { if (e.element) { var n = e.element.querySelector("[data-".concat(t, "]")); n && (n.innerHTML = "") } })), this.isDestroyed = !0 } }]) && i(t.prototype, n), Object.defineProperty(t, "prototype", { writable: !1 }), e }(), P = function (e, t) { if (!(e && e instanceof Element && e instanceof HTMLElement)) throw new Error("".concat(m, ": Element isn't passed. Check documentation for more info. ").concat(b)); if (!t || "object" !== n(t) || "string" != typeof t.date && "number" != typeof t.date && !(t.date instanceof Date)) throw new Error("".concat(m, ": Date is invalid. Check documentation for more info. ").concat(b)); return new v(e, t) }; P.prototype = v.prototype, t.default = P }(), e.default }() }));
